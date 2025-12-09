<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hello!',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>Today will be a great day!</p>

    @include('beautymail::templates.sunny.contentEnd')

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
>>>>>>> 75179b85 (.)
