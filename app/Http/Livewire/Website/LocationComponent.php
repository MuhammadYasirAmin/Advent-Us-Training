<?php

namespace App\Http\Livewire\Website;

use App\Models\CourseVenues;
use Livewire\Component;

class LocationComponent extends Component
{
    public function render()
    {
        $venue_obj = CourseVenues::all();
        return view('livewire.website.location-component', compact('venue_obj'))->layout('layouts.web');
    }
}
