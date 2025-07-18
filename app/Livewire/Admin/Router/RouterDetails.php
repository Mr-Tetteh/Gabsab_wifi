<?php

namespace App\Livewire\Admin\Router;

use App\Models\Router;
use Livewire\Component;

class RouterDetails extends Component
{
    public $id;

    public $model;

    public $mac_address;

    public $serial_number;

    public $antenna_number;

    public $status;
    public $organization;

    public $created_at;

    public $Edit = false;

    public $unit_id;

    public $unique_id;

    public $modal = false;

    public function resetForm()
    {
        $this->mac_address = '';
        $this->serial_number = '';
        $this->antenna_number = '';
        $this->status = '';
        $this->model = '';
        $this->unique_id = '';
        $this->organization = '';
    }

    protected $rules = [
        'mac_address' => 'required|string|unique:routers,mac_address',
        'serial_number' => 'required|string|unique:routers,serial_number',
        'antenna_number' => 'required|string|unique:routers,antenna_number',
        'model' => 'required|string',
    ];

    public function edit($id)
    {
        $router = Router::findOrFail($id);
        $this->unit_id = $id;
        $this->mac_address = $router->mac_address;
        $this->serial_number = $router->serial_number;
        $this->antenna_number = $router->antenna_number;
        $this->model = $router->model;
        $this->status = $router->status;
        $this->organization = $router->organization;
        $this->Edit = true;
        $this->unique_id = $router->unique_id;
    }

    public function details_view($id)
    {
        $this->modal = true;
        $router = Router::findOrFail($id);
        $this->unit_id = $id;
        $this->mac_address = $router->mac_address;
        $this->serial_number = $router->serial_number;
        $this->antenna_number = $router->antenna_number;
        $this->model = $router->model;
        $this->status = $router->status;
        $this->created_at = $router->created_at;
        $this->unique_id = $router->unique_id;
        $this->serial_number = $router->organization;
    }

    public function closeModal()
    {
        $this->modal = false;
        $this->resetForm();
    }

    public function update()
    {
        Router::find($this->unit_id)->update([
            'mac_address' => $this->mac_address,
            'serial_number' => $this->serial_number,
            'antenna_number' => $this->antenna_number,
            'model' => $this->model,
            'organization' => $this->organization,
            'status' => $this->status,
            'unique_id' => $this->unique_id,
        ]);

        session()->flash('message', 'Router updated successfully.');
        $this->resetForm();
        $this->Edit = false;
    }

    public function create()
    {
        $this->validate();
        Router::create([
            'mac_address' => $this->mac_address,
            'serial_number' => $this->serial_number,
            'antenna_number' => $this->antenna_number,
            'model' => $this->model,
        ]);
        $this->resetForm();
        session()->flash('message', 'Router created successfully.');

    }

    public function delete($id)
    {
        Router::find($id)->delete();
        session()->flash('message', 'Router deleted successfully.');
    }

    public function render()
    {
        $routers = \App\Models\Router::all();

        return view('livewire.admin.router.router-details', compact('routers'));
    }
}
