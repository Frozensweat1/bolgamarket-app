{{-- Responsive data table wrapper for admin resources. --}}
@props(['columns' => []])

<div class="overflow-x-auto rounded-lg border border-border bg-surface">
    <table class="w-full text-sm">
        <thead>
            <tr class="border-b border-border bg-surface-muted">
                @foreach($columns as $column)
                    <th class="whitespace-nowrap px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-text-muted">{{ $column }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="divide-y divide-border">
            {{ $slot }}
        </tbody>
    </table>
</div>
