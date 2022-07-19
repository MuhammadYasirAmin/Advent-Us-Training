<?php

namespace App\Http\Livewire\WebApp;

use Livewire\Component;

class LoginForm extends Component
{
    public function render()
    {
        return view('livewire.web-app.login-form')->layout('layouts.web_innerPage');
    }
}
