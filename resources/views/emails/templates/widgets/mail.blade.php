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
@extends('notify::emails.templates.widgets')

@section('content')

    @include('notify::emails.templates.widgets.articleStart')


    {!! $html !!}

    @include('notify::emails.templates.widgets.articleEnd')


    {{-- @include('notify::emails.templates.widgets.newfeatureStart')

    <h4 class="secondary"><strong>Hello World again</strong></h4>
    <p>This is another test</p>

    @include('notify::emails.templates.widgets.newfeatureEnd') --}}

@stop
