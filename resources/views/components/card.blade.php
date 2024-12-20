@php
    $classes ='p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-900 group transition-colors duration-300'
@endphp

<div
    {{$attributes(['class'=> $classes])}}>
    {{ $slot }}
</div>
