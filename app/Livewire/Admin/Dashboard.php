<?php

namespace App\Livewire\Admin;

use App\Models\Router;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $admin = User::where('role', 'admin')->orWhere('role', 'super_admin')->count();
        $customers = User::where('role', 'customer')->count();
        $today_customers = User::where('role', 'customer')->whereDate('created_at', today())->count();
        $routers = Router::count();
        $active_routers = Router::where('status', true)->count();

        return view('livewire.admin.dashboard', compact('admin', 'customers', 'today_customers', 'routers', 'active_routers'));
    }
}
