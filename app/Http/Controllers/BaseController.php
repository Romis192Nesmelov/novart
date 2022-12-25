<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __invoke()
    {
        return view('home',[
            'menu' => [
                'key1' => ['nav' => 'about', 'name' => 'Обо мне'],
                'key2' => ['nav' => 'skills', 'name' => 'Навыки'],
                'key3' => ['nav' => 'education', 'name' => 'Образование'],
                'key4' => ['nav' => 'experience', 'name' => 'Опыт работы'],
                'key5' => ['nav' => 'works', 'name' => 'Портфолио'],
                'key6' => ['nav' => 'contacts', 'name' => 'Контакты']
            ],
            'slides' => [
                ['h1' => 'Donec dapibus elit.', 'h2' => 'Phasellus sed ipsum ac nunc pulvinar consequat.', 'image' => 'img_bg_1.jpg'],
                ['h1' => 'Integer vel porttitor.', 'h2' => 'Aenean iaculis nulla odio, eleifend dictum nisi.', 'image' => 'img_bg_2.jpg'],
                ['h1' => 'Suspendisse potenti. Sed.', 'h2' => 'Nam quis enim laoreet, placerat libero id.', 'image' => 'img_bg_3.jpg'],
            ]
        ]);
    }
}
