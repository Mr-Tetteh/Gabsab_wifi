<?php

namespace App\Livewire\Admin\Price;

use App\Models\Price;
use Livewire\Component;

class SetPrice extends Component
{
    public $name;

    public $price;

    public $quantity;

    public $adv_1;

    public $adv_2;

    public $adv_3;

    public $adv_4;

    public $adv_5;

    public $unit_id;

    public $modal = false;

    public $Edit = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|string|min:0',
        'adv_1' => 'nullable|string|max:255',
        'adv_2' => 'nullable|string|max:255',
        'adv_3' => 'nullable|string|max:255',
        'adv_4' => 'nullable|string|max:255',
        'adv_5' => 'nullable|string|max:255',
    ];

    public function formReset()
    {
        $this->name = '';
        $this->price = '';
        $this->quantity = '';
        $this->adv_1 = '';
        $this->adv_2 = '';
        $this->adv_3 = '';
        $this->adv_4 = '';
        $this->adv_5 = '';
    }

    public function create()
    {
        $this->validate();
        Price::create([
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'adv_1' => $this->adv_1,
            'adv_2' => $this->adv_2,
            'adv_3' => $this->adv_3,
            'adv_4' => $this->adv_4,
            'adv_5' => $this->adv_5,
        ]);

        session()->flash('message', 'Price set successfully.');
        $this->formReset();
    }

    public function edit($id)
    {
        $price = Price::find($id);
        $this->unit_id = $id;
        $this->name = $price->name;
        $this->price = $price->price;
        $this->quantity = $price->quantity;
        $this->adv_1 = $price->adv_1;
        $this->adv_2 = $price->adv_2;
        $this->adv_3 = $price->adv_3;
        $this->adv_4 = $price->adv_4;
        $this->adv_5 = $price->adv_5;
        $this->Edit = true;
    }

    public function update()
    {
        $price = Price::find($this->unit_id);
        $price->update([
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'adv_1' => $this->adv_1,
            'adv_2' => $this->adv_2,
            'adv_3' => $this->adv_3,
            'adv_4' => $this->adv_4,
            'adv_5' => $this->adv_5,
        ]);
        $this->Edit = false;
        session()->flash('message', 'Price updated successfully.');
        $this->formReset();

    }

    public function delete($id)
    {
        $price = Price::find($id);
        $price->delete();
        session()->flash('message', 'Price deleted successfully.');
    }

    public function render()
    {
        $datas = Price::latest()->get();

        return view('livewire.admin.price.set-price', compact('datas'));
    }
}
