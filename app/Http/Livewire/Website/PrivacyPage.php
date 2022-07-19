<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class PrivacyPage extends Component
{
    public function render()
    {
        return view('livewire.website.privacy-page')->layout('layouts.web_innerPage');
    }
}
