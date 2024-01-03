<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.dashboard')]
#[Title('Listing')]
class Listing extends Component
{
    public function render()
    {
        return view('livewire.pages.listing');
    }
}
