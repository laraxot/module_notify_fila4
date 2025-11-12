<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> b19cd40 (.)
@extends('notify::emails.templates.ark')

@section('content')

    {{--
    @include('notify::emails.templates.ark.heading', [
		'heading' => $subject,
		'level' => 'h1'
	])
    --}}

    @include('notify::emails.templates.ark.contentStart')
        {!! $html !!}
    @include('notify::emails.templates.ark.contentEnd')



<<<<<<< HEAD
@stop
=======
@stop
>>>>>>> b19cd40 (.)
