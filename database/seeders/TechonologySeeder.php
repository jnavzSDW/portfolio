<?php

namespace Database\Seeders;

use App\Models\technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechonologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tech = new technology;
        $tech['name'] = 'Laravel';
        $tech['logo'] = 'fa-brands fa-laravel';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'HTML5';
        $tech['logo'] = 'fa-brands fa-html5';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'CSS';
        $tech['logo'] = 'fa-brands fa-css3-alt';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'JavaScript';
        $tech['logo'] = 'fa-brands fa-js';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'Bootstrap';
        $tech['logo'] = 'fa-brands fa-bootstrap';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'MySQL';
        $tech['logo'] = 'fa-solid fa-database';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'React.js';
        $tech['logo'] = 'fa-brands fa-react';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'PHP';
        $tech['logo'] = 'fa-brands fa-php';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'Python';
        $tech['logo'] = 'fa-brands fa-python';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'Vue.Js';
        $tech['logo'] = 'fa-brands fa-vuejs';
        $tech->save();
        
        $tech = new technology;
        $tech['name'] = 'Angular';
        $tech['logo'] = 'fa-brands fa-angular';
        $tech->save();
    }
}
