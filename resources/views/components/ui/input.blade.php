{{-- Text input with consistent form styling. --}}
@props(['label' => null, 'name' => null, 'id' => null, 'error' => null])

@php $fieldId = $id ?? $name ?? 'input-'.uniqid(); @endphp

<div class="space-y-1">
    @if($label)
        <label for="{{ $fieldId }}" class="block text-xs font-medium uppercase tracking-wide text-text-subtle">{{ $label }}</label>
    @endif
    <input id="{{ $fieldId }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'h-10 w-full rounded-lg border border-border bg-surface px-3 text-sm text-text outline-none transition placeholder:text-text-subtle focus:border-primary focus:ring-2 focus:ring-primary/20 '.($error ? 'border-danger ring-1 ring-danger' : '')]) }}>
    @if($error)
        <p class="text-xs font-medium text-danger">{{ $error }}</p>
    @endif
</div>
