<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\DB;
use App\Models\CourseEnquiry;

class CourseView extends Component
{
    public function render(Request $request)
    {
        $courseID = $request->courseID;
        $courseName = $request->courseName;
        $category_list = CourseCategory::all();
        $courses_lists = DB::table('course_infos')
        ->join('course_venues_infos', 'course_infos.id', '=', 'course_venues_infos.CID')
        ->where('course_infos.id', '=', $courseID)
        ->select('course_infos.*','course_venues_infos.*')
        ->get();
        return view('livewire.website.course-view', compact('courses_lists', 'courseName', 'courseID'))->layout('layouts.web');
    }

    public function EnquirySubmit(Request $request)
    {
        $enquiryForm = new CourseEnquiry;
        $enquiryForm->Lead_Name = $request->Lead_Name;
        $enquiryForm->Lead_Email = $request->Lead_Email;
        $enquiryForm->Lead_Phone = $request->Lead_Phone;
        $enquiryForm->Lead_Company = $request->Lead_Company;
        $enquiryForm->Company_Phone = $request->Company_Phone;
        $enquiryForm->Company_Designation = $request->Company_Designation;
        $enquiryForm->Lead_Message = $request->Lead_Message;

        $courseID = $request->courseID;
        $courseName = $request->courseName;

        if ($enquiryForm->save()) {
            return back()->with('Enquiry_Form', 'Form Submitted Successfully!');
        } else {
            return back()->with('Enquiry_Not_Form', 'Form Not Submitted. Error!');
        }
    }

}
