<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Homepage extends Component
{
    #[Layout('components.layouts.app.header')]
    public function render()
    {
        return view('livewire.user.homepage');
    }
}
