<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\skill;
use App\Models\technology;
use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(){
        $technology = technology::all();
        $works = work::all();
        $profile = Profile::first();
        $eductions = Education::all();
        $experiences = Experience::all();
        $categories = category::all();

        return view('app', ['techs' => $technology, 'works' => $works, 'profile' => $profile, 'educations' => $eductions, 'experiences' => $experiences, 'categories' => $categories]);
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

    public function editAboutMe(){
        $request = Request()->validate([
            'editAbout' => 'required',
        ]);

        $profile = Profile::first();

        $profile['description'] = $request['editAbout'];
        $profile->save();

        return redirect(url()->previous());
    }

    public function updateSkills(){
        $request = request()->all();

        // dd($request);

        skill::truncate();

        foreach($request['skills-1'] as $newSkill){
            if($newSkill){
                $skill = new skill;
                $skill['name'] = $newSkill;
                $skill['category_id'] = 1;
                $skill->save();
            }
        }
        
        foreach($request['skills-2'] as $newSkill){
            if($newSkill){
                $skill = new skill;
                $skill['name'] = $newSkill;
                $skill['category_id'] = 2;
                $skill->save();
            }
        }
        
        foreach($request['skills-3'] as $newSkill){
            if($newSkill){
                $skill = new skill;
                $skill['name'] = $newSkill;
                $skill['category_id'] = 3;
                $skill->save();
            }
        }

        return redirect(url()->previous());
    }
}
