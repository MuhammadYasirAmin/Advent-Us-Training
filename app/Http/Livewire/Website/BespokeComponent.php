<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CourseVenues;
use App\Models\BespokeForm;

class BespokeComponent extends Component
{
    public function render()
    {
        $venue_obj = CourseVenues::all();
        $courses_lists = DB::table('course_infos')
        ->join('course_venues_infos', 'course_infos.id', '=', 'course_venues_infos.CID')
        ->select('course_infos.*','course_venues_infos.*')
        ->get();
        return view('livewire.website.bespoke-component', compact('venue_obj', 'courses_lists'))->layout('layouts.web');
    }

    public function BespokeSubmit(Request $request)
    {
        $bespokeForm = new BespokeForm;
        $bespokeForm->Course_Title = $request->Course_Title;
        $bespokeForm->Course_Duration = $request->Course_Duration;
        $bespokeForm->Course_Participant = $request->Course_Participant;
        $bespokeForm->Course_Venue = $request->Course_Venue;
        $bespokeForm->Start_Date = $request->Start_Date;
        $bespokeForm->Course_Objective = $request->Course_Objective;
        $bespokeForm->Course_Salutation = $request->Course_Salutation;
        $bespokeForm->Lead_Name = $request->Lead_Name;
        $bespokeForm->Lead_Designation = $request->Lead_Designation;
        $bespokeForm->Lead_Company = $request->Lead_Company;
        $bespokeForm->Lead_Address = $request->Lead_Address;
        $bespokeForm->Lead_Country = $request->Lead_Country;
        $bespokeForm->Lead_City = $request->Lead_City;
        $bespokeForm->Lead_Email = $request->Lead_Email;
        $bespokeForm->Lead_Phone = $request->Lead_Phone;
        $bespokeForm->Lead_Telephone = $request->Lead_Telephone;

        if ($bespokeForm->save()) {
            return back()->with('Bespoke_Form', 'Form Submitted Successfully!');
        } else {
            return back()->with('Bespoke_Not_Form', 'Form Not Submitted. Error!');
        }
    }
}
