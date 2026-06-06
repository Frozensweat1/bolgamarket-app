{{-- Public landing page introducing Bolga Market to shoppers and vendors. --}}
@component('layouts.guest', ['title' => 'Bolga Market'])
    <header class="border-b border-border bg-surface">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ route('landing') }}" class="flex items-center gap-3">
                <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary font-bold text-white">BM</span>
                <span class="font-display text-xl font-bold text-text">Bolga Market</span>
            </a>
            <nav class="hidden items-center gap-6 text-sm font-semibold text-text-muted md:flex">
                <a href="#features" class="transition hover:text-text">Features</a>
                <a href="#vendors" class="transition hover:text-text">Vendors</a>
                <a href="#pricing" class="transition hover:text-text">Pricing</a>
            </nav>
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 rounded-lg border border-border px-4 py-2 text-sm font-semibold text-text transition hover:bg-surface-subtle focus:outline-none focus-visible:ring-2 focus-visible:ring-primary">
                Admin
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 12h15"/></svg>
            </a>
        </div>
    </header>

    <main>
        <section class="relative overflow-hidden bg-primary-950 text-white">
            <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=1800&q=80" width="1800" height="1100" alt="Fresh produce at a busy market" class="absolute inset-0 h-full w-full object-cover opacity-35">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-950 via-primary-950/85 to-primary-900/40"></div>
            <div class="relative mx-auto grid min-h-[calc(100vh-4.5rem)] max-w-7xl items-center gap-10 px-4 py-20 sm:px-6 lg:grid-cols-[1.05fr_0.95fr] lg:px-8">
                <div class="max-w-3xl">
                    <p class="mb-4 inline-flex rounded-full bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-primary-100 ring-1 ring-white/20">Local commerce, organized</p>
                    <h1 class="font-display text-5xl font-bold leading-tight text-white sm:text-6xl lg:text-7xl">Bolga Market</h1>
                    <p class="mt-5 max-w-2xl text-lg leading-8 text-primary-50">A clean digital storefront for Bolgatanga traders, fresh food sellers, artisans, and everyday shoppers who want reliable discovery, ordering, and vendor management.</p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="#vendors" class="inline-flex items-center justify-center gap-2 rounded-lg bg-white px-5 py-3 text-sm font-bold text-primary-900 transition hover:bg-primary-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                            Explore vendors
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 12h15"/></svg>
                        </a>
                        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center justify-center rounded-lg border border-white/30 px-5 py-3 text-sm font-bold text-white transition hover:bg-white/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-white">Open dashboard</a>
                    </div>
                </div>

                <div class="grid gap-4 rounded-lg border border-white/15 bg-white/10 p-4 shadow-float backdrop-blur">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="rounded-lg bg-white p-4 text-primary-950">
                            <p class="text-xs font-bold uppercase tracking-wide text-text-muted">Today</p>
                            <p class="mt-2 text-3xl font-extrabold">GHS 18.4k</p>
                            <p class="mt-1 text-xs text-success">+12% sales</p>
                        </div>
                        <div class="rounded-lg bg-primary-100 p-4 text-primary-950">
                            <p class="text-xs font-bold uppercase tracking-wide text-primary-700">Orders</p>
                            <p class="mt-2 text-3xl font-extrabold">146</p>
                            <p class="mt-1 text-xs text-primary-700">32 pending</p>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white p-4 text-text">
                        <div class="flex items-center justify-between">
                            <p class="font-semibold">Top categories</p>
                            <span class="text-xs text-text-muted">Live preview</span>
                        </div>
                        <div class="mt-4 space-y-3">
                            @foreach([['Fresh produce', '78%', 'w-[78%]'], ['Woven baskets', '61%', 'w-[61%]'], ['Grains & spices', '44%', 'w-[44%]']] as [$label, $value, $width])
                                <div>
                                    <div class="mb-1 flex justify-between text-xs font-semibold text-text-muted"><span>{{ $label }}</span><span>{{ $value }}</span></div>
                                    <div class="h-2 rounded-full bg-surface-subtle"><div class="{{ $width }} h-2 rounded-full bg-primary"></div></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="bg-surface py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-xs font-bold uppercase tracking-wide text-primary">Marketplace tools</p>
                    <h2 class="mt-2 font-display text-3xl font-bold text-text">Everything needed to run a local marketplace online.</h2>
                </div>
                <div class="mt-10 grid gap-4 md:grid-cols-3">
                    @foreach([
                        ['Inventory clarity', 'Track product availability, prices, categories, and featured stock without spreadsheet sprawl.', 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                        ['Vendor onboarding', 'Give sellers a tidy operational home with profiles, verification states, and performance views.', 'M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8z'],
                        ['Order visibility', 'Follow orders from request to fulfillment with signals that help staff act quickly.', 'M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v14l-3-2-3 2-3-2-3 2V6a2 2 0 012-2z'],
                    ] as [$title, $body, $icon])
                        <article
                            x-data="{ visible: false }"
                            x-intersect="visible = true"
                            :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-3 opacity-0'"
                            class="rounded-lg border border-border bg-surface p-6 shadow-card transition duration-500"
                        >
                            <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary-100 text-primary">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/></svg>
                            </div>
                            <h3 class="mt-5 text-lg font-bold text-text">{{ $title }}</h3>
                            <p class="mt-2 text-sm leading-6 text-text-muted">{{ $body }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="vendors" class="bg-surface-muted py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wide text-primary">Featured vendors</p>
                        <h2 class="mt-2 font-display text-3xl font-bold text-text">A market floor made easier to scan.</h2>
                    </div>
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-primary-700">Manage vendors <span aria-hidden="true">-></span></a>
                </div>
                <div class="mt-10 grid gap-4 md:grid-cols-3">
                    @foreach([
                        ['Amina Fresh Foods', 'Vegetables, grains, smoked fish', 'Open', 'success'],
                        ['Nyariga Basket Co.', 'Handwoven baskets and decor', 'Featured', 'info'],
                        ['Savanna Spice House', 'Pepper, dawadawa, dry goods', 'Low stock', 'warning'],
                    ] as [$name, $desc, $status, $type])
                        <x-ui.card>
                            <div class="flex items-start justify-between gap-4">
                                <x-ui.avatar :name="$name" />
                                <x-ui.badge :type="$type">{{ $status }}</x-ui.badge>
                            </div>
                            <h3 class="mt-5 text-lg font-bold text-text">{{ $name }}</h3>
                            <p class="mt-2 text-sm text-text-muted">{{ $desc }}</p>
                        </x-ui.card>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="pricing" class="bg-surface py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-xs font-bold uppercase tracking-wide text-primary">Launch packages</p>
                    <h2 class="mt-2 font-display text-3xl font-bold text-text">Start simple, then grow into full operations.</h2>
                </div>
                <div class="mt-10 grid gap-4 lg:grid-cols-3">
                    @foreach([
                        ['Starter', 'For catalog pilots', 'GHS 0', ['Vendor directory', 'Basic categories', 'Manual order list']],
                        ['Market Desk', 'For active operations', 'GHS 299/mo', ['Dashboard KPIs', 'Vendor statuses', 'Order workflow']],
                        ['Regional', 'For multi-town teams', 'Custom', ['Role-based staff tools', 'Advanced reports', 'Priority support']],
                    ] as $index => [$name, $desc, $price, $items])
                        <div class="rounded-lg border {{ $index === 1 ? 'border-primary bg-primary-50' : 'border-border bg-surface' }} p-6 shadow-card">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-bold text-text">{{ $name }}</h3>
                                @if($index === 1)<x-ui.badge type="success">Recommended</x-ui.badge>@endif
                            </div>
                            <p class="mt-2 text-sm text-text-muted">{{ $desc }}</p>
                            <p class="mt-6 font-display text-3xl font-bold text-text">{{ $price }}</p>
                            <ul class="mt-6 space-y-3 text-sm text-text-muted">
                                @foreach($items as $item)
                                    <li class="flex gap-2"><span class="text-success">✓</span>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="bg-primary-900 py-16 text-white">
            <div class="mx-auto flex max-w-7xl flex-col justify-between gap-6 px-4 sm:px-6 md:flex-row md:items-center lg:px-8">
                <div>
                    <h2 class="font-display text-3xl font-bold">Ready to organize the market floor?</h2>
                    <p class="mt-2 text-primary-100">Open the admin panel and start shaping the catalog, vendors, and orders.</p>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center justify-center rounded-lg bg-white px-5 py-3 text-sm font-bold text-primary-900 transition hover:bg-primary-50">Go to admin</a>
            </div>
        </section>
    </main>

    <footer class="bg-text py-10 text-white">
        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-6 px-4 text-sm text-white/70 sm:px-6 md:flex-row lg:px-8">
            <p>© {{ date('Y') }} Bolga Market. Built for local commerce.</p>
            <div class="flex gap-5">
                <a href="#" class="hover:text-white">Privacy</a>
                <a href="#" class="hover:text-white">Terms</a>
                <a href="#" class="hover:text-white">Contact</a>
            </div>
        </div>
    </footer>
@endcomponent
