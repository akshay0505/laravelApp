<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){
        
        return "<script>console.log(".json_encode($request->all()).")</script>$request";
    }
}
