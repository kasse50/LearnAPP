<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function login()
    {
      return view('auth.login');
    }

    public function register()
    {
      return view('auth.register');
    }

    public function reset()
    {
      return view('auth.reset');
    }

}
