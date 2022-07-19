<?php

namespace App\Http\Livewire\WebApp;

use Livewire\Component;

class DashboardPage extends Component
{
    public function render()
    {
        return view('livewire.web-app.dashboard-page')->layout('layouts.panel');
    }
}
