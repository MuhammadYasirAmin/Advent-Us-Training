<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use App\Models\CourseVenues;

class LocationPage extends Component
{
    public function render()
    {
        $venue_obj = CourseVenues::all();
        return view('livewire.website.location-page', compact('venue_obj'))->layout('layouts.web_innerPage');
    }
}
