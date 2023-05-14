<?php

namespace App\Controllers;
class Auth extends BaseController
{
    public function login()
    {
        $credentials = [
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        $loginAttempt = auth()->attempt($credentials);

        if (! $loginAttempt->isOK()) {
            return redirect()->back()->with('error', $loginAttempt->reason());
        }

        if ($loginAttempt->isOK()) {
            return redirect()->back();
        }
    }
}
