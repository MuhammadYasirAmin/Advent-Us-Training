<?php

namespace App\Http\Livewire\WebApp;

use Livewire\Component;
use App\Models\CourseCategories;
use App\Models\CourseVenues;

class CreateCourse extends Component
{
    public function render()
    {
        $category_obj = CourseCategories::all();
        $venue_obj = CourseVenues::all();
        return view('livewire.web-app.create-course')->layout('layouts.panel')->with(compact('category_obj', 'venue_obj'));
    }
}
