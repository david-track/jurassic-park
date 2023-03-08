@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 border-b-2 border-neutral-400 dark:border-neutral-600 text-sm font-medium leading-5 text-amber-900 dark:text-amber-100 focus:outline-none focus:border-neutral-700 transition duration-150 ease-in-out' : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-amber-500 dark:text-amber-400 hover:text-amber-700 dark:hover:text-amber-300 hover:border-amber-300 dark:hover:border-amber-700 focus:outline-none focus:text-amber-700 dark:focus:text-amber-300 focus:border-amber-300 dark:focus:border-amber-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
