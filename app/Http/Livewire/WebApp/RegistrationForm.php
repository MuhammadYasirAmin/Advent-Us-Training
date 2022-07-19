<?php

namespace App\Http\Livewire\WebApp;

use Livewire\Component;

class RegistrationForm extends Component
{
    public function render()
    {
        return view('livewire.web-app.registration-form')->layout('layouts.web_innerPage');
    }
}
