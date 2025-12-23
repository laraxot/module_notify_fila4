<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
@stop
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@stop
=======
@stop
>>>>>>> a12f125f4a (.)
=======
@stop
>>>>>>> b93ef594b4 (.)
=======
@stop
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
