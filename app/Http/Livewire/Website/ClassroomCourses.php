<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use App\Models\CourseCategories;
use Illuminate\Support\Facades\DB;

class ClassroomCourses extends Component
{
    public function render()
    {
        $category_list = CourseCategories::all();
        $courses_lists = DB::table('course_infos')
        ->join('course_venues_infos', 'course_infos.id', '=', 'course_venues_infos.CID')
        ->where('course_infos.Course_Type', '=', 'CTC')
        ->select('course_infos.*','course_venues_infos.*', 'course_venues_infos.CID')
        ->groupBy('course_venues_infos.CID')
        ->get();
        return view('livewire.website.classroom-courses',compact('category_list', 'courses_lists'))->layout('layouts.web_innerPage');
    }
}
