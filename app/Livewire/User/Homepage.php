<?php

namespace App\Livewire\User;

use App\Models\Price;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Homepage extends Component
{
    public $modal = false;

    #[Layout('components.layouts.app.header')]
    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function render()
    {
        $datas = Price::all();

        return view('livewire.user.homepage', compact('datas'));
    }
}
