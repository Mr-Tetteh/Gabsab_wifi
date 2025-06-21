<?php

namespace App\Livewire\Admin\DashboardLink;

use App\Models\User;
use Livewire\Component;

class NewCustomers extends Component
{
    public function render()
    {
        $datas = User::where('role', 'customer')->WhereDate('created_at', today())->get();

        return view('livewire.admin.dashboard-link.new-customers', compact('datas'));
    }
}
