{{-- Compact status badge for labels and dynamic states. --}}
@props(['type' => 'info'])

@php
    $types = [
        'success' => 'bg-success-light text-success',
        'warning' => 'bg-warning-light text-warning',
        'danger' => 'bg-danger-light text-danger',
        'info' => 'bg-info-light text-info',
        'neutral' => 'bg-surface-subtle text-text-muted',
    ];
@endphp

<span role="status" {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full px-2.5 py-1 text-xs font-semibold '.$types[$type]]) }}>
    {{ $slot }}
</span>
