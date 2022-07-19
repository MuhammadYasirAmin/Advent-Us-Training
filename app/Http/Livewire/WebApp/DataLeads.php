<?php

namespace App\Http\Livewire\WebApp;

use Livewire\Component;
use App\Models\CourseEnquiry;
use App\Models\ContactForm;
use App\Models\BespokeForm;

class DataLeads extends Component
{
    public function render()
    {
        $enquiry_obj = CourseEnquiry::all();
        $contact_obj = ContactForm::all();
        $bespoke_obj = BespokeForm::all();
        return view('livewire.web-app.data-leads',compact('enquiry_obj', 'contact_obj', 'bespoke_obj'))->layout('layouts.panel');
    }
}
