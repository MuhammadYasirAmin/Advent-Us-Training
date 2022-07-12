<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use App\Models\CourseCategory;
use App\Models\CourseVenues;
use Illuminate\Support\Facades\DB;

class HomeComponent extends Component
{
    public function render()
    {
        $category_list = CourseCategory::all();
        $venue_obj = CourseVenues::all();
        $courses_lists = DB::table('course_infos')
        ->join('course_venues_infos', 'course_infos.id', '=', 'course_venues_infos.CID')
        ->orderBy('course_infos.id', 'desc')
        ->select('course_infos.*','course_venues_infos.*')
        ->distinct('course_venues_infos.CID')
        ->limit(10)
        ->get();
        return view('livewire.website.home-component', compact('category_list', 'courses_lists', 'venue_obj'))->layout('layouts.web');
    }
}
