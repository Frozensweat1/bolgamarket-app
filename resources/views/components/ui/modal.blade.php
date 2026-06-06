{{-- Alpine modal that opens through named browser events. --}}
@props(['name'])

<div
    x-data="{ open: false }"
    x-on:open-modal.window="open = ($event.detail === '{{ $name }}')"
    x-on:close-modal.window="open = false"
    x-show="open"
    x-transition.opacity
    x-trap.noscroll="open"
    class="fixed inset-0 z-50 flex items-center justify-center bg-text/40 p-4 backdrop-blur-sm"
    x-cloak
>
    <div
        @click.outside="open = false"
        x-show="open"
        x-transition
        class="w-full max-w-md rounded-lg bg-surface p-6 shadow-dialog"
    >
        {{ $slot }}
    </div>
</div>
