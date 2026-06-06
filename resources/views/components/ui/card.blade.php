{{-- Simple framed surface for repeated content or focused panels. --}}
@props(['padding' => true])

<div {{ $attributes->merge(['class' => 'rounded-lg border border-border bg-surface shadow-card '.($padding ? 'p-5' : '')]) }}>
    {{ $slot }}
</div>
