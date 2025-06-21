<?php

namespace App\Livewire\Admin\Ux;

use App\Models\Router;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $admin = User::where('role', 'admin')->orWhere('role', 'super_admin')->count();
        $customers = User::where('role', 'customer')->count();
        $today_customers = User::where('role', 'customer')->whereDate('created_at', today())->count();
        $routers = Router::where('unique_id', Auth::user()->unique_id)->count();
        $active_routers = Router::where('status', true)->where('unique_id', Auth::user()->unique_id)->count();

        return view('livewire.admin.ux.dashboard', compact('admin', 'customers', 'today_customers', 'routers', 'active_routers'));
    }
}
