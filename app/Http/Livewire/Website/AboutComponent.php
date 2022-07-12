<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.website.about-component')->layout('layouts.web');
    }
}
