@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mt-8 shadow py-2 bg-white dark:bg-gray-200 rounded-lg
				-ml-4'
            : 'mt-8';

$a_classes = ($active ?? false)
            ? 'flex pl-4'
            : 'flex';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a {{ $attributes->merge(['class' => $a_classes]) }}>
    {{ $slot }}
</a>
</li>
