<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experiences;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['years' => '2022', 'company' => 'Мастерфуд', 'title' => 'Дизайнер', 'description' => 'Дизайн и верстка всякой невнятной фигни, от которой мы все давно устали'],
            ['years' => '2022', 'company' => 'Мастерфуд', 'title' => 'Дизайнер', 'description' => 'Дизайн и верстка всякой невнятной фигни, от которой мы все давно устали'],
            ['years' => '2022', 'company' => 'Мастерфуд', 'title' => 'Дизайнер', 'description' => 'Дизайн и верстка всякой невнятной фигни, от которой мы все давно устали'],
            ['years' => '2022', 'company' => 'Мастерфуд', 'title' => 'Дизайнер', 'description' => 'Дизайн и верстка всякой невнятной фигни, от которой мы все давно устали'],
        ];

        foreach ($data as $item) {
            Experiences::create($item);
        }
    }
}
