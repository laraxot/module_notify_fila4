<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hello!',
        'level' => 'h1',
    ])

<<<<<<< HEAD
    @include('beautymail::templates.sunny.content-start')

        <p>Today will be a great day!</p>

    @include('beautymail::templates.sunny.content-end')
=======
    @include('beautymail::templates.sunny.contentStart')

        <p>Today will be a great day!</p>

    @include('beautymail::templates.sunny.contentEnd')
>>>>>>> 75179b8 (.)

    @include('beautymail::templates.sunny.button', [
        	'title' => 'Click me',
        	'link' => 'http://google.com'
    ])

<<<<<<< HEAD
<<<<<<< HEAD
@stop
=======
@stop
>>>>>>> b19cd40 (.)
=======
@stop
>>>>>>> 4e2ebfb (.)
