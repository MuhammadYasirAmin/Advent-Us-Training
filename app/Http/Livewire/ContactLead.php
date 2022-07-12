<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm;

class ContactLead extends Component
{
    public function render()
    {
        $contact_obj = ContactForm::all();
        return view('livewire.contact-lead',compact('contact_obj'))->layout('layouts.webapp');
    }
}
