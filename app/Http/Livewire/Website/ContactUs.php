<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.website.contact-us')->layout('layouts.web_innerPage');
    }

    public function ContactSubmit(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'Lead_Email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return back()->with('Contact_Not_Form', 'Validations Error!');
        }

        if ($validator) {
            $contactForm = new ContactForm();
            $contactForm->Lead_Name = $request->Lead_Name;
            $contactForm->Lead_Email = $request->Lead_Email;
            $contactForm->Lead_Phone = $request->Lead_Phone;
            $contactForm->Lead_Subject = $request->Lead_Subject;
            $contactForm->Lead_Message = $request->Lead_Message;

            if ($contactForm->save()) {
                return back()->with('Contact_Form', 'Form Submitted Successfully!');
            } else {
                return back()->with('Contact_Not_Form', 'Form Not Submitted. Error!');
            }
        }
    }
}
