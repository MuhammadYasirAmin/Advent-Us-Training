<?php

namespace App\Http\Livewire\WebApp;

use Livewire\Component;
use App\Models\CourseCategories;
use Illuminate\Http\Request;

class CreateCategory extends Component
{
    public function render()
    {
        $category_obj = CourseCategories::all();
        return view('livewire.web-app.create-category', compact('category_obj'))->layout('layouts.panel');
    }

    public function storeCategoryinfo(Request $request)
    {
        $categoryName = $request->cate_Name;
        $categoryDesc = $request->cate_Desc;
        $categoryCover = $request->file('cate_cover');
        $imageName = time().'.'.$categoryCover->extension();
        $categoryCover->move(public_path('Uploads/Categories'), $imageName);

        $category_obj = new CourseCategories();
        $category_obj->cate_Name= $categoryName;
        $category_obj->cate_Desc= $categoryDesc;
        $category_obj->cate_Image = $imageName;
        $category_obj->save();
        return back()->with('cate_created', 'Category Created Successfully!');
    }
}
