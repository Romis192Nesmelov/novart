@extends('layouts.mail')

@section('content')
    @include('emails.blocks.head_block',['hLevel' => 2, 'head' => 'Сообщение с сайта'])
    @include('emails.blocks.head_block',['hLevel' => 4, 'head' => 'Имя: '.$name])
    @include('emails.blocks.head_block',['hLevel' => 4, 'head' => 'Телефон: '.$phone])
    @include('emails.blocks.head_block',['hLevel' => 4, 'head' => 'E-mail: '.$email])
@endsection
