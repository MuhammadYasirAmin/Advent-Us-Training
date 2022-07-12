<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BespokeForm;

class BespokeLead extends Component
{
    public function render()
    {
        $bespoke_obj = BespokeForm::all();
        return view('livewire.bespoke-lead',compact('bespoke_obj'))->layout('layouts.webapp');
    }
}
