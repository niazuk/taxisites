<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReCaptchaController extends Controller
{
    public function store(Request $request)
    {
        return $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email|unique:users',
            'message' => 'required',
            'g-recaptcha-response' => 'required',
        ]);
    }
}
