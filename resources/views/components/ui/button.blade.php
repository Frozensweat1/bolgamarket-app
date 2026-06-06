{{-- Reusable button component with variants and sizes. --}}
@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
    'loading' => false,
])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-lg font-semibold transition focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50';
    $sizes = ['sm' => 'px-3 py-1.5 text-xs', 'md' => 'px-4 py-2 text-sm', 'lg' => 'px-5 py-2.5 text-base'];
    $variants = [
        'primary' => 'bg-primary text-white hover:bg-primary-700 focus-visible:ring-primary',
        'secondary' => 'bg-surface-subtle text-text hover:bg-border focus-visible:ring-border-strong',
        'danger' => 'bg-danger text-white hover:bg-danger/90 focus-visible:ring-danger',
        'ghost' => 'text-text-muted hover:bg-surface-subtle hover:text-text focus-visible:ring-border',
        'outline' => 'border border-border bg-surface text-text hover:bg-surface-subtle focus-visible:ring-primary',
    ];
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $base.' '.$sizes[$size].' '.$variants[$variant]]) }}>
    @if($loading)
        <x-ui.spinner class="h-4 w-4" />
    @endif
    {{ $slot }}
</button>
