<?php
namespace App\Http\Traits;

trait EmailVerification {

    public function getUserEmail() {
        return $this->email;
    }

    public function getUserCode() {
        return $this->verification_code;
    }
    public function getUserCodeExpirationDate() {
        return $this->code_sent_at->copy()->diffInMinutes(now());
    }

    public function checkEmailHasVerify() {
        return is_null($this->email_verified_at) ? false : true;
    }

    public function sendEmailVerificationNotification() {
            Notification::route('mail', $this->getUserEmail())->notify(new EmailVerificationNotification($this->getUserCode()));
    }

    public function markEmailAsVerified(){
        return $this->update([
            'email_verified_at' => now(),
            'verification_code' => null,
            'code_sent_at' => null
        ]);
    }
}
