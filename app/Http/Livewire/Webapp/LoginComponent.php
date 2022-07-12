<?php

namespace App\Http\Livewire\Webapp;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginComponent extends Component
{
    public function render()
    {
        return view('livewire.webapp.login-component')->layout('layouts.login');
    }

}
