<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Piece;

class PiesesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['data' => 309, 'label' => 'Чашек кофе'],
            ['data' => 56, 'label' => 'Проектов'],
            ['data' => 23, 'label' => 'Заказчика'],
            ['data' => 1, 'label' => 'Партнер'],
        ];

        foreach ($data as $item) {
            Piece::create($item);
        }
    }
}
