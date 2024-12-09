<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function login() {
    return view('auth.login');
   } 
   
   function loginPost(Request $request) {
    return redirect()->route('home.index');
   }

   public function home() {
      return view('home.index');
   }

public function logout(Request $request) {
   Auth::logout();
   $request->session()->invalidate();
   $request->session()->regenerateToken();
   
   return redirect()->route('home.index');
}
   

 
}

