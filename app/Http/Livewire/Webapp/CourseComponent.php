<?php

namespace App\Http\Livewire\Webapp;

use Livewire\Component;
use App\Models\CourseCategory;
use App\Models\CourseVenues;
use Illuminate\Support\Facades\Auth;

class CourseComponent extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $category_obj = CourseCategory::all();
            $venue_obj = CourseVenues::all();
            return view('livewire.webapp.course-component')->layout('layouts.webapp')->with(compact('category_obj', 'venue_obj'));
        }
        return view('livewire.webapp.login-component')->layout('layouts.login');

    }
}
