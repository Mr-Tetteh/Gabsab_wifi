<?php

namespace App\Livewire\User;

use App\Models\Price;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Homepage extends Component
{
    #[Layout('components.layouts.app.header')]
    public function render()
    {
        $datas = Price::all();

        return view('livewire.user.homepage', compact('datas'));
    }
}
