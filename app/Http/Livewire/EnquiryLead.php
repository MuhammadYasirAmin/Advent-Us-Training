<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CourseEnquiry;

class EnquiryLead extends Component
{
    public function render()
    {
        $enquiry_obj = CourseEnquiry::all();
        return view('livewire.enquiry-lead',compact('enquiry_obj'))->layout('layouts.webapp');
    }
}
