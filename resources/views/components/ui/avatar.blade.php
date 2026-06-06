{{-- Initials avatar for users and vendors. --}}
@props(['name' => 'User', 'size' => 'md'])

@php
    $initials = collect(explode(' ', trim($name)))->filter()->take(2)->map(fn ($part) => mb_substr($part, 0, 1))->implode('');
    $sizes = ['sm' => 'h-8 w-8 text-xs', 'md' => 'h-10 w-10 text-sm', 'lg' => 'h-12 w-12 text-base'];
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex shrink-0 items-center justify-center rounded-lg bg-primary-100 font-bold text-primary '.$sizes[$size]]) }}>
    {{ $initials ?: 'U' }}
</span>
