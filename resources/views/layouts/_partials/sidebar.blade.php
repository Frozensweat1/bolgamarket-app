{{-- Collapsible admin navigation shared by admin pages. --}}
@php
    $navItems = [
        ['label' => 'Dashboard', 'url' => route('admin.dashboard'), 'match' => 'admin', 'icon' => 'M3 12l9-9 9 9M5 10v10a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V10'],
        ['label' => 'Products', 'url' => '#', 'match' => 'admin/products*', 'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
        ['label' => 'Orders', 'url' => '#', 'match' => 'admin/orders*', 'icon' => 'M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v14l-3-2-3 2-3-2-3 2V6a2 2 0 012-2z'],
        ['label' => 'Vendors', 'url' => '#', 'match' => 'admin/vendors*', 'icon' => 'M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8zm6 2a3 3 0 100-6 3 3 0 000 6z'],
        ['label' => 'Reports', 'url' => '#', 'match' => 'admin/reports*', 'icon' => 'M4 19V5m0 14h16M8 17V9m4 8V7m4 10v-5'],
    ];
@endphp

<aside
    x-data="{ collapsed: $persist(false).as('bolga-sidebar-collapsed') }"
    x-bind:class="[
        collapsed ? 'lg:w-20' : 'lg:w-72',
        mobileSidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'
    ]"
    class="fixed inset-y-0 left-0 z-40 flex w-72 flex-col border-r border-border bg-surface transition-all duration-300 lg:static"
>
    <div class="flex h-16 items-center gap-3 border-b border-border px-4">
        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-primary text-sm font-bold text-white">BM</div>
        <span x-show="!collapsed" x-transition class="truncate font-display text-lg font-bold text-text">Bolga Market</span>
        <button type="button" @click="collapsed = !collapsed" class="ml-auto hidden rounded-lg p-2 text-text-muted transition hover:bg-surface-subtle hover:text-text focus:outline-none focus-visible:ring-2 focus-visible:ring-primary lg:inline-flex" aria-label="Toggle sidebar">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h10"/></svg>
        </button>
    </div>

    <nav class="flex-1 space-y-1 overflow-y-auto p-3">
        @foreach($navItems as $item)
            <a href="{{ $item['url'] }}"
               class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition {{ request()->is($item['match']) ? 'bg-primary/10 text-primary' : 'text-text-muted hover:bg-surface-subtle hover:text-text' }}">
                <svg class="h-5 w-5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/></svg>
                <span x-show="!collapsed" x-transition class="truncate">{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="border-t border-border p-3">
        <div class="flex items-center gap-3 rounded-lg px-3 py-2">
            <x-ui.avatar :name="auth()->user()->name ?? 'Market Admin'" size="sm" />
            <div x-show="!collapsed" x-transition class="min-w-0">
                <p class="truncate text-sm font-semibold text-text">{{ auth()->user()->name ?? 'Market Admin' }}</p>
                <p class="truncate text-xs text-text-muted">Operations</p>
            </div>
        </div>
    </div>
</aside>
