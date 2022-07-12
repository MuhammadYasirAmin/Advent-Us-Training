<?php

namespace App\Http\Livewire\Webapp;

use App\Models\CourseCategory;
use Livewire\Component;
use Illuminate\Http\Request;

class CategoryComponent extends Component
{
    public function render()
    {
        $category_obj = CourseCategory::all();
        return view('livewire.webapp.category-component', compact('category_obj'))->layout('layouts.webapp');
    }

    public function storeCategoryinfo(Request $request)
    {
        $categoryName = $request->cate_Name;
        $categoryDesc = $request->cate_Desc;
        $categoryCover = $request->file('cate_cover');
        $imageName = time().'.'.$categoryCover->extension();
        $categoryCover->move(public_path('Uploads/Categories'), $imageName);

        $category_obj = new CourseCategory();
        $category_obj->cate_Name= $categoryName;
        $category_obj->cate_Desc= $categoryDesc;
        $category_obj->cate_Image = $imageName;
        $category_obj->save();
        return back()->with('cate_created', 'Category Created Successfully!');
    }
}
