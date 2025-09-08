<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeightController extends Controller
{
  public function register()
  {
    return view('register');
  }

  public function login(Request $request)
  {
    return view('login');
  }
}
