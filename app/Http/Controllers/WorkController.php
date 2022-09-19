<?php

namespace App\Http\Controllers;

use App\Models\screenshot;
use App\Models\work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function create(){
        $request = Request()->validate([
            'title' => 'required',
            'description' => 'required',
            'techStack' => 'required',
            'image' => 'required',
        ]);
        
        // dd($request['image'][0]->getClientOriginalName());

        $work = new work;
        $work['title'] = $request['title'];
        $work['description'] = $request['description'];

        $work->save();

        foreach($request['image'] as $img){
            $image = new screenshot;
            $image['image'] = $img->getClientOriginalName();
            $image['work_id'] = $work->id;
            $image->save();
        }
        // dd();
        foreach($request['techStack'] as $tech){
            $work->technologies()->attach($tech);
        }

        return redirect('/');
    }
}
