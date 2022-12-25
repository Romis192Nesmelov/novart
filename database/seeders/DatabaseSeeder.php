<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(EducationsTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(PiesesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(WorksTableSeeder::class);
    }
}
