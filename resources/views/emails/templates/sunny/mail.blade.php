<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
<?php

declare(strict_types=1);

?>
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
