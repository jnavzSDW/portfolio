<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new category;
        $cat['name'] = "Web Development";
        $cat->save();
        
        $cat = new category;
        $cat['name'] = "Programming";
        $cat->save();
        
        $cat = new category;
        $cat['name'] = "Soft Skills";
        $cat->save();

        $skill = new skill;
        $skill['name'] = 'HTML';
        $skill['category_id'] = 1;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'CSS';
        $skill['category_id'] = 1;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'JavaScript';
        $skill['category_id'] = 1;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'Laravel';
        $skill['category_id'] = 1;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'Bootstrap';
        $skill['category_id'] = 1;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'MySQL';
        $skill['category_id'] = 1;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'React.js';
        $skill['category_id'] = 1;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'PHP';
        $skill['category_id'] = 2;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'Java';
        $skill['category_id'] = 2;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'C#';
        $skill['category_id'] = 2;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'Adaptability';
        $skill['category_id'] = 3;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'Collaboration';
        $skill['category_id'] = 3;
        $skill->save();

        $skill = new skill;
        $skill['name'] = 'Communication';
        $skill['category_id'] = 3;
        $skill->save();
    }
}
