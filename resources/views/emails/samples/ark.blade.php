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
@extends('notify::emails.templates.ark')

@section('content')

    @include('notify::emails.templates.ark.heading', [
		'heading' => 'Hello World!',
		'level' => 'h1'
	])

    @include('notify::emails.templates.ark.contentStart')

        <h4 class="secondary"><strong>Hello World</strong></h4>
        <p>This is a test</p>

    @include('notify::emails.templates.ark.contentEnd')

    @include('notify::emails.templates.ark.heading', [
		'heading' => 'Another headline',
		'level' => 'h2'
	])

    @include('notify::emails.templates.ark.contentStart')

        <h4 class="secondary"><strong>Hello World again</strong></h4>
        <p>This is another test</p>

    @include('notify::emails.templates.ark.contentEnd')

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
@stop
=======
@stop
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
@stop
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
@stop
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
@stop
>>>>>>> 9777d1b3 (.)
