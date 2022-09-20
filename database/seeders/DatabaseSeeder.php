<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        $this->call(TechonologySeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(ScreenshotSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ExperienceSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
