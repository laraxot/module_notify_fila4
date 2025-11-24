<?php

declare(strict_types=1);

?>
@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hello!',
        'level' => 'h1',
    ])

<<<<<<< HEAD
<<<<<<< HEAD
    @include('beautymail::templates.sunny.content-start')

        <p>Today will be a great day!</p>

    @include('beautymail::templates.sunny.content-end')
=======
=======
>>>>>>> 7148d73 (.)
    @include('beautymail::templates.sunny.contentStart')

        <p>Today will be a great day!</p>

    @include('beautymail::templates.sunny.contentEnd')
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

    @include('beautymail::templates.sunny.button', [
        	'title' => 'Click me',
        	'link' => 'http://google.com'
    ])

@stop
