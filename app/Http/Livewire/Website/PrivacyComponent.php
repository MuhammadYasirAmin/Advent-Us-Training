<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class PrivacyComponent extends Component
{
    public function render()
    {
        return view('livewire.website.privacy-component')->layout('layouts.web');
    }
}
