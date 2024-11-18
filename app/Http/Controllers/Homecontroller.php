<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
   public function home()
   {
     return view('home.home');
   }

   public function about()
   {
     return view('home.about');
   }

   public function info()
   {
     return view('home.info');
   }

   public function dashbroad()
   {
     return view('home.dashbroad');
   }

}
