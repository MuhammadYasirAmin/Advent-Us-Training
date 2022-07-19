<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.website.about-page')->layout('layouts.web_innerPage');
    }
}
