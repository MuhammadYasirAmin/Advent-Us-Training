<?php

namespace App\Http\Livewire\Webapp;

use App\Models\CourseVenues;
use Livewire\Component;
use Illuminate\Http\Request;

class VenueComponent extends Component
{
    public function render()
    {
        $venue_obj = CourseVenues::all();
        return view('livewire.webapp.venue-component', compact('venue_obj'))->layout('layouts.webapp');
    }

    public function storeVenueinfo(Request $request)
    {
        $venueName =$request->venue_name;
        $venueCover = $request->file('venue_cover');
        $imageName = time().'.'.$venueCover->extension();
        $venueCover->move(public_path('Uploads/VenueCovers'), $imageName);

        if ($venueCover) {
            $venu_obj = new CourseVenues();
            $venu_obj->venues_name= $venueName;
            $venu_obj->venue_Image = $imageName;
            $venu_obj->save();
            return back()->with('venue_created', 'Venue Created Successfully!');
        }
    }
}
