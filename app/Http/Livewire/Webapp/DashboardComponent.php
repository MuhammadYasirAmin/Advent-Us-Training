<?php

namespace App\Http\Livewire\Webapp;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.webapp.dashboard-component')->layout('layouts.webapp');
    }
}
