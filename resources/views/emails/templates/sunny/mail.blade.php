<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
@extends('notify::emails.templates.sunny')

@section('content')

    {{-- @include ('beautymail::templates.sunny.heading', [
        'heading' => 'Hello!',
        'level' => 'h1',
    ]) --}}

    @include('notify::emails.templates.sunny.contentStart')

    {!! $html !!}

    @include('notify::emails.templates.sunny.contentEnd')

    {{-- @include('beautymail::templates.sunny.button', [
        'title' => 'Click me',
        'link' => 'http://google.com',
    ]) --}}

@stop
