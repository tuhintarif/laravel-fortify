<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function twoFactorAuthentication() {

        return view('two-factor-authentication');
    }
}
