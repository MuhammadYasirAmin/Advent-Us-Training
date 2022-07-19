<?php

namespace App\Http\Livewire\WebApp;

use Livewire\Component;
use App\Models\CourseVenues;
use Illuminate\Http\Request;

class CreateVenue extends Component
{
    public function render()
    {
        $venue_obj = CourseVenues::all();
        return view('livewire.web-app.create-venue', compact('venue_obj'))->layout('layouts.panel');
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
