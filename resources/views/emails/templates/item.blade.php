<?php

declare(strict_types=1);

?>
@include('notify::emails.templates.'.$theme.'.content-start')
{!! $html !!}
@include('notify::emails.templates.'.$theme.'.content-end')
