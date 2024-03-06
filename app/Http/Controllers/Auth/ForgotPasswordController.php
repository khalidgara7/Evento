<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm(){
        return view('auth.forgotpassword');
    }


    public function ResetPasswordRequest(Request $request)
    {
        $user = User::getEmailChecked($request->email);

        if(!empty($user))
        {
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user)->send(new ForgotPasswordMail($user));
            return redirect('login')->with('success', "Please check your email and reset your password");
        }
        else
        {
            return view('auth.forgotpassword')->with('error', "User not found");
        }

    }
}
