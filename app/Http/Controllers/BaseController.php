<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Direction;
use App\Models\Piece;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experiences;

class BaseController extends Controller
{
    public function __invoke()
    {
        return view('home',[
            'menu' => [
                'key0' => ['nav' => 'home', 'name' => 'Главная'],
                'key1' => ['nav' => 'about', 'name' => 'Обо мне'],
                'key2' => ['nav' => 'skills', 'name' => 'Навыки'],
                'key3' => ['nav' => 'education', 'name' => 'Образование'],
                'key4' => ['nav' => 'experiences', 'name' => 'Опыт работы'],
                'key5' => ['nav' => 'works', 'name' => 'Портфолио'],
                'key6' => ['nav' => 'contacts', 'name' => 'Контакты']
            ],
            'fadeIn' => ['fadeInLeft','fadeInRight','fadeInTop','fadeInBottom'],
            'slides' => Slide::all(),
            'directions' => Direction::with('works')->get(),
            'pieces' => Piece::all(),
            'skills' => Skill::all(),
            'education' => Education::all(),
            'experiences' => Experiences::all()
        ]);
    }
}
