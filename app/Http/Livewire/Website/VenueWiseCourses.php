<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\CourseCategories;
use Illuminate\Support\Facades\DB;
use App\Models\CourseVenues;

class VenueWiseCourses extends Component
{
    public function render(Request $request)
    {
        $VenueName = $request->VenueName;
        $category_list = CourseCategories::all();
        $venue_obj = CourseVenues::all();
        $courses_lists = DB::table('course_infos')
        ->join('course_venues_infos', 'course_infos.id', '=', 'course_venues_infos.CID')
        ->where('course_venues_infos.Venue_Name', '=', $VenueName)
        ->select('course_infos.*','course_venues_infos.*')
        ->get();
        return view('livewire.website.venue-wise-courses', compact('courses_lists', 'venue_obj', 'VenueName', 'category_list'))->layout('layouts.web_innerPage');
    }
}
