<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class index_controller extends Controller
{
    //Create Admin User Account
    public function create_account(Request $FormData)
    {
        $fields=self::ValidateAccountFormData($FormData);
        //admin_users::create(['fullname'=>$fields['fullname'], 'email'=> $fields['email'], 'password'=> $fields['password']]);
        users::create($fields);
        return redirect('/')->with('message', 'Account Created Successfully!');
    }

    //Validate Account Form Data
    private function ValidateAccountFormData($FormData){
        $FormFields=$FormData->validate([
            'fullname'=>'required',
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password'=>['required', 'min:5', 'same:repeat_password'],
            'repeat_password' => 'required'
        ]);
        $FormFields['password'] = Hash::make($FormFields['password']);//hash password
        return $FormFields;
    }

    //Handles User SignIn Request
    public function login(Request $request)
    {
        $credentials=$request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/student-list');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    //Checks if user is logged in & Returns Student-List View
    // public function Student_list_View(){
    //     return Auth::check() ? view('/student-list')->with('user_name', Auth::user()->fullname) : redirect('/');
    // }
}
