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
{{-- Visualizzazione parametri come badge --}}
@if(!empty($params))
    <div class="space-y-2">
        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
            {{ __('notify::mail_template.sections.variables') }}
        </div>
        
        <div class="flex flex-wrap gap-2">
            @foreach(array_filter(array_map('trim', explode(',', $params))) as $param)
                <x-filament::badge>{{ $param }}</x-filament::badge>
            @endforeach
        </div>
        
        <div class="text-xs text-gray-500 dark:text-gray-400">
            {{ __('notify::mail_template.fields.variables.helper_text') }}
        </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
@endif
=======
@endif 
>>>>>>> b19cd40 (.)
=======
@endif
>>>>>>> 4e2ebfb (.)
