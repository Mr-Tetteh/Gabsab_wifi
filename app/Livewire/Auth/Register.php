<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $first_name = '';

    public string $last_name = '';

    public string $email = '';

    public string $contact = '';

    public string $address = '';

    public string $gender = '';

    public string $password = '';

    public string $role = '';

    public string $router_id = '';
    public $terms;

    public string $password_confirmation = '';

    public $modal = false;

    public function openModal()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:255'], 'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'contact' => ['required', 'digits:10', 'max:10', 'unique:'.User::class.',contact'], 'address' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:Male,Female,other'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'terms' =>['required']
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('admin.dashboard', absolute: false), navigate: true);
    }
}
