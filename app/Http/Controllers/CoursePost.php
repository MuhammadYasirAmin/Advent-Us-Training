<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseInfo;
use App\Models\CourseVenuesInfo;
use Illuminate\Support\Facades\DB;

class CoursePost extends Controller
{
    public function addCourse(Request $request)
    {
        $flag = false;
        $courseInfo = new CourseInfo();
        $courseInfo->Course_Title = $request->Course_Title;
        // $courseInfo->Course_Price = $request->Course_Price;
        $courseInfo->Course_Category = $request->Course_Category;
        $courseInfo->Course_Duration = $request->Course_Duration;
        $courseInfo->Course_Description = $request->Course_Desc;
        $courseInfo->Course_Type = $request->Course_Type;
        $courseCover = $request->file('cate_cover');
        $imageName = time().'.'.$courseCover->extension();
        $courseCover->move(public_path('Uploads/CourseCover'), $imageName);
        $courseInfo->course_Image = $imageName;

        if ($courseInfo->save()) {
            $id = $courseInfo->id;
            $courseInfo = CourseInfo::find($id);
            $venueInfo = new CourseVenuesInfo();
            // $venueInfo->Venue_Date = $request->Course_Dates;
            // $venueInfo->Venue_Name = $request->Course_Venue;
            // $venueInfo->Venue_Fee = $request->Course_Price;
            // $venueInfo->Multi_Category = $request->Multi_Category;

            foreach ($request->Course_Dates as $key => $value) {

                DB::insert("insert into `course_venues_infos` (`Venue_Date`, `Venue_Name`, `Venue_Fee`, `CID`) values ('".$request->Course_Dates[$key]."','".$request->Course_Venue[$key]."','".$request->Course_Price[$key]."', '".$id."')");
            }
            return back()->with('course_created', 'New Course Added Successfully!');
        }



    }
}
