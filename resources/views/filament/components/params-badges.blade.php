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
<<<<<<< HEAD
                <x-filament::badge>{{ $param }}</x-filament::badge>
=======
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                           bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 
                           border border-blue-200 dark:border-blue-800">
                    {{ $param }}
                </span>
>>>>>>> 75179b8 (.)
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
