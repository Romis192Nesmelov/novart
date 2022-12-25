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
            ['h1' => 'Donec dapibus elit.', 'h2' => 'Phasellus sed ipsum ac nunc pulvinar consequat.', 'image' => 'img_bg_1.jpg'],
            ['h1' => 'Integer vel porttitor.', 'h2' => 'Aenean iaculis nulla odio, eleifend dictum nisi.', 'image' => 'img_bg_2.jpg'],
            ['h1' => 'Suspendisse potenti. Sed.', 'h2' => 'Nam quis enim laoreet, placerat libero id.', 'image' => 'img_bg_3.jpg'],
        ];

        foreach ($data as $item) {
            Slide::create($item);
        }
    }
}
