<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\CourseVenuesInfos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\CourseRegister;

class CourseRegistration extends Component
{
    public function render(Request $request)
    {
        $courseID = $request->courseID;
        $courseName = $request->courseName;
        $courses_lists = DB::table('course_infos')
        ->join('course_venues_infos', 'course_infos.id', '=', 'course_venues_infos.CID')
        ->where('course_venues_infos.CID', '=', $courseID)
        ->select('course_infos.*','course_venues_infos.*')
        ->get();
        return view('livewire.website.course-registration', compact('courses_lists', 'courseName', 'courseID'))->layout('layouts.web_innerPage');
    }

    public function courseRegistration(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'Lead_Email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return back()->with('Course_Not_Register_Form', 'Validations Error!');
        }

        $courseForm = new CourseRegister;
        $courseForm->Course_Name = $request->Course_Name;
        $courseForm->Course_Date_Venue = $request->Course_Date_Venue;
        $courseForm->Del_Name = $request->Del_Name;
        $courseForm->Del_Designation = $request->Del_Designation;
        $courseForm->Del_Company = $request->Del_Company;
        $courseForm->Del_Address = $request->Del_Address;
        $courseForm->Del_Email = $request->Del_Email;
        $courseForm->Del_Phone = $request->Del_Phone;
        $courseForm->Bil_Salution = $request->Bil_Salution;
        $courseForm->Bil_Name = $request->Bil_Name;
        $courseForm->Bil_Designation = $request->Bil_Designation;
        $courseForm->Bil_Company = $request->Bil_Company;
        $courseForm->Bil_Address = $request->Bil_Address;
        $courseForm->Bil_City = $request->Bil_City;
        $courseForm->Bil_Country = $request->Bil_Country;
        $courseForm->Bil_Email = $request->Bil_Email;
        $courseForm->Bil_Phone = $request->Bil_Phone;
        $courseForm->Bil_Telephone = $request->Bil_Telephone;

        $courseID = $request->courseID;
        $courseName = $request->courseName;

        if ($courseForm->save()) {
            return back()->with('Course_Register_Form', 'Form Submitted Successfully!');
        } else {
            return back()->with('Course_Not_Register_Form', 'Form Not Submitted. Error!');
        }
    }
}
