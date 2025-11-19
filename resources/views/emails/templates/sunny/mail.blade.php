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
@extends('notify::emails.templates.sunny')

@section('content')

    {{-- @include ('beautymail::templates.sunny.heading', [
        'heading' => 'Hello!',
        'level' => 'h1',
    ]) --}}

<<<<<<< HEAD
    @include('notify::emails.templates.sunny.content-start')

    {!! $html !!}

    @include('notify::emails.templates.sunny.content-end')
=======
    @include('notify::emails.templates.sunny.contentStart')

    {!! $html !!}

    @include('notify::emails.templates.sunny.contentEnd')
>>>>>>> 75179b8 (.)

    {{-- @include('beautymail::templates.sunny.button', [
        'title' => 'Click me',
        'link' => 'http://google.com',
    ]) --}}

@stop
