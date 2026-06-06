{{-- Admin topbar with breadcrumbs, search, and quick actions. --}}
<header class="sticky top-0 z-20 flex h-16 items-center gap-3 border-b border-border bg-surface/95 px-4 backdrop-blur sm:px-6 lg:px-8">
    <button type="button" @click="mobileSidebarOpen = true" class="rounded-lg p-2 text-text-muted transition hover:bg-surface-subtle hover:text-text focus:outline-none focus-visible:ring-2 focus-visible:ring-primary lg:hidden" aria-label="Open sidebar">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>

    <div class="min-w-0">
        <p class="text-xs font-medium uppercase tracking-wide text-text-subtle">Admin</p>
        <p class="truncate text-sm font-semibold text-text">Market operations</p>
    </div>

    <div class="ml-auto hidden w-full max-w-sm items-center rounded-lg border border-border bg-surface-muted px-3 py-2 text-sm text-text-muted sm:flex">
        <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.3-4.3M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z"/></svg>
        Search products, vendors, orders
    </div>

    <button type="button" class="relative rounded-lg p-2 text-text-muted transition hover:bg-surface-subtle hover:text-text focus:outline-none focus-visible:ring-2 focus-visible:ring-primary" aria-label="Notifications">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 10-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0a3 3 0 11-6 0"/></svg>
        <span class="absolute right-2 top-2 h-2 w-2 rounded-full bg-danger"></span>
    </button>
</header>
