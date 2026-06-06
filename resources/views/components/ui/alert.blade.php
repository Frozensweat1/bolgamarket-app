{{-- Alert banner for user feedback. --}}
@props(['type' => 'info'])

@php
    $types = [
        'success' => 'border-success/30 bg-success-light text-success',
        'warning' => 'border-warning/30 bg-warning-light text-warning',
        'danger' => 'border-danger/30 bg-danger-light text-danger',
        'info' => 'border-info/30 bg-info-light text-info',
    ];
@endphp

<div {{ $attributes->merge(['class' => 'rounded-lg border px-4 py-3 text-sm font-medium '.$types[$type]]) }}>
    {{ $slot }}
</div>
