<?php

namespace App\Http\Livewire\Webapp;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RegisterComponent extends Component
{
    public function render()
    {
        return view('livewire.webapp.register-component')->layout('layouts.login');
    }

    // public function Reg_sbmit_form(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'Reg_Email' => 'required|email',
    //         'Reg_Username' => 'required',
    //         'Reg_Password' => 'required|min:6|max:12',
    //         'password_confirmation' => 'required|same:Reg_Password|min:6|max:12',
    //     ]);

    //     DB::table('user_registration')->insert([
    //         'User_Email' => $request->Reg_Email,
    //         'User_Name' => $request->Reg_Username,
    //         'User_Password' => $request->Reg_Password,
    //     ]);
    //     return back()->with('User_Registerd', 'User Registerd Successfully!');
    // }

    public function createUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Reg_Email' => 'required|email',
            'Reg_Username' => 'required',
            'Reg_Password' => 'required|min:6|max:12',
            'password_confirmation' => 'required|same:Reg_Password|min:6|max:12',
        ]);

        if ($validator->fails()) {
            return back()->with('User_Not_Registerd', 'User Not Registerd Successfully!');
        }

        $user = new User();
        $user->email = $request->Reg_Email;
        $user->name = $request->Reg_Username;
        $user->password = bcrypt($request->Reg_Password);
        $user->save();

        return back()->with('User_Registerd', 'User Registerd Successfully!');
    }
}
