<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Users extends Component
{
    public string $first_name = '';
    public string $last_name = '';

    public string $email = '';
    public string $contact = '';
    public string $address = '';
    public string $gender = '';

    public string $role = '';

    public string $router_id = '';

    public string $password_confirmation = '';

    public function render()
    {
        $datas = User::where('role', 'admin')->latest();
        return view('livewire.admin.users', compact('datas'));
    }
}
