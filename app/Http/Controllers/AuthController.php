<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

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

    public function loginUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Log_Email' => 'required|email',
            'Log_Password' => 'required|min:6|max:12',
        ]);

        if ($validator->fails()) {
            return back()->with('User_Not_Login', 'User Validation Error!');
        }

        // $credentials = array('email' => $request->Log_Email, 'password' => $request->Log_Password);

        if (!Auth::attempt(array('email' => $request->Log_Email, 'password' => $request->Log_Password))) {
            return back()->with('User_Not_Login', 'User Not Login Successfully!');
        }

        $user = User::where('email', $request->Log_Email)->first();
        if ($user) {
            if (Hash::check($request->Log_Password, $user->password)) {
                $token = $user->createToken('LoginToken')->accessToken;
                return redirect()->route('user.Dashboard');
                // return back()->with('User_Login', 'User Login Successfully!');
            } else {
                return back()->with('User_Login', 'Password mismatch');
            }
        } else {
            return back()->with('User_Login', 'User does not exist');
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->array(['status_code' => 200, 'message' => 'Token Deleted Successfully!']);
    }
}
