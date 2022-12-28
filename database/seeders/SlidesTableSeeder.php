<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slide;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['h1' => 'Открытость и коммуникабельность.', 'h2' => 'Всегда открыта новым, интересным проектам и рада плодотворному и долгосрочному сотрудничеству с клиентами.', 'image' => 'img_bg_1.jpg'],
            ['h1' => 'Пунктуальность.', 'h2' => 'Соблюдаю дедлайны как никто другой.', 'image' => 'img_bg_2.jpg'],
            ['h1' => 'Креативность.', 'h2' => 'Фантазия и энергия бьет ключом, невозможно остановить.', 'image' => 'img_bg_3.jpg'],
        ];

        foreach ($data as $item) {
            Slide::create($item);
        }
    }
}
