<?php

namespace App\Http\Controllers\Webapp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;

class WebController extends Controller
{

    public function render()
    {
        $category_obj = CourseCategory::all();
        return view('layouts.web', compact('category_obj'));
    }
}
