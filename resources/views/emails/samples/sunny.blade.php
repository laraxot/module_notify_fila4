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
@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hello!',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.content-start')

        <p>Today will be a great day!</p>

    @include('beautymail::templates.sunny.content-end')

    @include('beautymail::templates.sunny.button', [
        	'title' => 'Click me',
        	'link' => 'http://google.com'
    ])

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
