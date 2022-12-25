<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function feedback(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'regex:/^((\+)?(\d)(\s)?(\()?[0-9]{3}(\))?(\s)?([0-9]{3})(\-)?([0-9]{2})(\-)?([0-9]{2}))$/',
            'message' => 'required|min:50|max:1000'
        ]);
        Mail::to(env('MAIL_TO'))->send(new FeedbackForm($data));
        $message = 'Спасибо за обращение, я обязательно свяжусь с Вами в самое ближайшее время!';
        return $request->ajax()
            ? response()->json(['success' => true, 'message' => $message])
            : redirect()->back()->with('message', $message);
    }
}
