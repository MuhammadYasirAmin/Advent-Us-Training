<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class FaqComponent extends Component
{
    public function render()
    {
        return view('livewire.website.faq-component')->layout('layouts.web');
    }
}
