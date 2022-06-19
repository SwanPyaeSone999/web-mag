@props(['disabled' => false])
@php
    $classes = " rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
@endphp

<textarea  cols="6" rows="6" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $classes ]) !!}>
    {{$slot}}
</textarea>
