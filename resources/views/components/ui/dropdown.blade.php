{{-- Alpine-powered dropdown for compact action menus. --}}
@props(['align' => 'right'])

@php
    $alignment = $align === 'left' ? 'left-0' : ($align === 'top' ? 'bottom-full left-0 mb-2' : 'right-0');
@endphp

<div x-data="{ open: false }" class="relative">
    <div @click="open = !open">
        {{ $trigger }}
    </div>
    <div
        x-show="open"
        x-transition
        @click.outside="open = false"
        class="absolute {{ $alignment }} z-50 mt-2 min-w-48 rounded-lg border border-border bg-surface p-1 shadow-float"
        x-cloak
    >
        {{ $content }}
    </div>
</div>
