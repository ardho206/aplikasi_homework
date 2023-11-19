<?php

namespace App\Livewire\Teachers\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.teachers.layouts.app')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.teachers.pages.home');
    }
}
