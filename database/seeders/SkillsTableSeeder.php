<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['name' => 'Photoshop', 'val' => 90],
            ['name' => 'Indesign', 'val' => 75],
            ['name' => 'jQuery', 'val' => 48],
            ['name' => 'HTML5', 'val' => 60],
            ['name' => 'CSS3', 'val' => 72],
            ['name' => 'WordPress', 'val' => 40],
        ];

        foreach ($data as $item) {
            Skill::create($item);
        }
    }
}
