<?php

namespace App\Http\Controllers;

use App\Models\technology;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(){
        $technology = technology::all();
        $works = work::all();

        return view('app', ['techs' => $technology, 'works' => $works]);
    }

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
