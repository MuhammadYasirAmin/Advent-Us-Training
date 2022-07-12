<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use App\Models\CourseCategory;

class ExpertiseComponent extends Component
{
    public function render()
    {
        $category_obj = CourseCategory::all();
        return view('livewire.website.expertise-component', compact('category_obj'))->layout('layouts.web');
    }
}
