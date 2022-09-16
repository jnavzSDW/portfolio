<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('login');
    }

    public function create(){
        
    }

    public function authenticate(){
        $request = Request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($request)){
            return redirect('/');
        }
    }

    public function destroy(){
        auth()->logout();

        return redirect('/');
    }
}
