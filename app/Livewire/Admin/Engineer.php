<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Engineer extends Component
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

    public bool $isEdit = false;

    public $unit_id;

    public function edit($id)
    {
        $this->isEdit = true;
        $user = User::findOrFail($id);
        $this->unit_id = $user->id;
        $this->first_name = $user->first_name;
        $this->role = $user->role;
        //        $this->router_id = $user->router_id;

    }

    public function update()
    {
        $user = User::findorFail($this->unit_id);
        $user->update([
            'role' => $this->role,
        ]);
        session()->flash('message', 'User updated successfully.');

    }

    public function render()
    {
        $datas = User::where('role', 'engineer')->latest()->get();

        return view('livewire.admin.engineer', compact('datas'));
    }
}
