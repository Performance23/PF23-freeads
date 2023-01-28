<?php

namespace App\Contracts;

interface EmailVerification {

    public function getUserEmail();

    public function getUserCode();

    public function getUserCodeExpirationDate();

    public function checkEmailHasVerify();

    public function sendEmailVerificationNotification();

    public function markEmailAsVerified();
}

