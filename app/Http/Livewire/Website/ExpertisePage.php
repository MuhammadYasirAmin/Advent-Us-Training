<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use App\Models\CourseCategories;

class ExpertisePage extends Component
{
    public function render()
    {
        $category_list = CourseCategories::all();
        return view('livewire.website.expertise-page', compact('category_list'))->layout('layouts.web_innerPage');
    }
}
