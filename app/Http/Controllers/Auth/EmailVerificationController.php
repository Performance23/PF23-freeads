<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Contracts\EmailVerification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EmailVerificationNotification;

class EmailVerificationController extends Controller
{

    public function create()
    {
        return view('auth/email-verification');
    }

    public function store($user)
    {
        if($user instanceof EmailVerification && $user->checkEmailHasVerify()){
            $user->sendEmailVerificationNotification();
        }
    }

    public function verify(Request $request){
        $request->validate([
            'code' => 'required',
        ]);
        $user  = User::where('verification_code', $request->code)->first();
        if(!$user){
            return back()->withErrors(['code' => 'Votre code est invalide. Veillez resaisir']);
        }
        if($user->getUserCodeExpirationDate() > 30){
            return back()->withErrors(['code' => 'Votre code est expire. Veillez redemander le code']);
        }
        if(!$user->hasVerifiedEmail()){
            $user->markEmailAsVerified();
        }
    }
}
