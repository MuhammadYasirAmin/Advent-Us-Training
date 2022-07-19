<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\CourseCategories;
use Illuminate\Support\Facades\DB;

class CategoryWiseCourses extends Component
{
    public function render(Request $request)
    {
        $CategoryName = $request->CategoryName;
        $category_list = CourseCategories::all();
        $courses_lists = DB::table('course_infos')
        ->join('course_venues_infos', 'course_infos.id', '=', 'course_venues_infos.CID')
        ->where('course_infos.Course_Category', '=', $CategoryName)
        ->select('course_infos.*','course_venues_infos.*')
        ->get();
        return view('livewire.website.category-wise-courses', compact('courses_lists', 'CategoryName', 'category_list'))->layout('layouts.web_innerPage');
    }
}
