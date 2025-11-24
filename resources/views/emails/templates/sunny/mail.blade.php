<?php

declare(strict_types=1);

?>
@extends('notify::emails.templates.sunny')

@section('content')

    {{-- @include ('beautymail::templates.sunny.heading', [
        'heading' => 'Hello!',
        'level' => 'h1',
    ]) --}}

<<<<<<< HEAD
<<<<<<< HEAD
    @include('notify::emails.templates.sunny.content-start')

    {!! $html !!}

    @include('notify::emails.templates.sunny.content-end')
=======
=======
>>>>>>> 7148d73 (.)
    @include('notify::emails.templates.sunny.contentStart')

    {!! $html !!}

    @include('notify::emails.templates.sunny.contentEnd')
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

    {{-- @include('beautymail::templates.sunny.button', [
        'title' => 'Click me',
        'link' => 'http://google.com',
    ]) --}}

@stop
