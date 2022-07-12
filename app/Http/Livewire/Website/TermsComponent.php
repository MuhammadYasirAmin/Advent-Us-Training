<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class TermsComponent extends Component
{
    public function render()
    {
        return view('livewire.website.terms-component')->layout('layouts.web');
    }
}
