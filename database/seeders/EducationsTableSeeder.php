<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Российский университет дружбы народов, Москва. 2021', 'description' => 'Институт гостиничного бизнеса и туризма, Гостиничное дело.'],
            ['name' => 'American club of Education. 2022', 'description' => 'Английский язык.'],
        ];

        foreach ($data as $item) {
            Education::create($item);
        }
    }
}
