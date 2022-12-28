<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Photoshop', 'val' => 95],
            ['name' => 'Indesign', 'val' => 80],
            ['name' => 'Illustrator', 'val' => 85],
            ['name' => 'Figma', 'val' => 85],
            ['name' => 'Adobe After Effects', 'val' => 70],
            ['name' => 'Вlender', 'val' => 40],
        ];

        foreach ($data as $item) {
            Skill::create($item);
        }
    }
}
