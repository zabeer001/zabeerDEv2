<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
     public function index()
     {
         $name = 'zabeer'; // Replace with dynamic data if needed
        $typedText = 'Node Express Developer, PHP Devloper, Python Developer'; 
     
         return view('landingPage', compact('name', 'typedText'));
     }
}
