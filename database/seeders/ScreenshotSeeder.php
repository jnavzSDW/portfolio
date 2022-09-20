<?php

namespace Database\Seeders;

use App\Models\screenshot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScreenshotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sc = new screenshot;
        $sc['image'] = "work1.png";
        $sc['work_id'] = 1;
        $sc->save();
        
        $sc = new screenshot;
        $sc['image'] = "work2.png";
        $sc['work_id'] = 1;
        $sc->save();
         
        $sc = new screenshot;
        $sc['image'] = "work3.png";
        $sc['work_id'] = 1;
        $sc->save();
         
        $sc = new screenshot;
        $sc['image'] = "work4.png";
        $sc['work_id'] = 1;
        $sc->save();
         
        $sc = new screenshot;
        $sc['image'] = "work5.png";
        $sc['work_id'] = 1;
        $sc->save();
         
    }
}
