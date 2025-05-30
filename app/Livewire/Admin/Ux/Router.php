<?php

namespace App\Livewire\Admin\Ux;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Router extends Component
{
    public $modal = false;
    public $id;

    public $model;

    public $mac_address;

    public $serial_number;

    public $antenna_number;

    public $status;

    public $created_at;

    public $Edit = false;

    public $unit_id;

    public $unique_id;
    public function details_view($id)
    {
        $this->modal = true;
        $router = \App\Models\Router::findOrFail($id);
        $this->unit_id = $id;
        $this->mac_address = $router->mac_address;
        $this->serial_number = $router->serial_number;
        $this->antenna_number = $router->antenna_number;
        $this->model = $router->model;
        $this->status = $router->status;
        $this->created_at = $router->created_at;
        $this->unique_id = $router->unique_id;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function render()
    {
        $routers = \App\Models\Router::where('unique_id', Auth::user()->unique_id)->get();
        return view('livewire.admin.ux.router', compact('routers'));
    }
}
