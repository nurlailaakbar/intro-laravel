<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function form()
   {
   	return view ('registrasi');
   }

public function input()
   {
   	return view ('welcome1');
   }
}

