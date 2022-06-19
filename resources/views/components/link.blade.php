@php
    $classes = "text-xs  hover:underline  hover:decoration-wavy transition-colors ease-out duration-500"
@endphp

<li>
    <a href="" {{ $attributes->merge(['class' => $classes]) }}>
        {{$slot}}
    </a>

</li>
