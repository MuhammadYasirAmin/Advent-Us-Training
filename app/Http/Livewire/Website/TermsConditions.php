<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class TermsConditions extends Component
{
    public function render()
    {
        return view('livewire.website.terms-conditions')->layout('layouts.web_innerPage');
    }
}
