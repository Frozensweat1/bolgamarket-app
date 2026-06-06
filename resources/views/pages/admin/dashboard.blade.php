{{-- Admin dashboard showing operational overview for Bolga Market. --}}
@component('layouts.app', ['title' => 'Bolga Market Admin'])
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
        <div>
            <h1 class="font-display text-2xl font-bold text-text">Dashboard</h1>
            <p class="mt-0.5 text-sm text-text-muted">Monitor orders, vendors, products, and market health from one workspace.</p>
        </div>
        <div class="flex items-center gap-2">
            <x-ui.button variant="outline">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v12m0 0l4-4m-4 4l-4-4M5 21h14"/></svg>
                Export
            </x-ui.button>
            <x-ui.button>
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"/></svg>
                Add product
            </x-ui.button>
        </div>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        @foreach([
            ['Revenue today', 'GHS 18,420', '+12.8%', 'success'],
            ['Open orders', '146', '32 pending', 'warning'],
            ['Active vendors', '58', '+4 this week', 'info'],
            ['Low stock items', '19', 'Needs review', 'danger'],
        ] as [$label, $value, $meta, $type])
            <x-ui.card>
                <div class="flex items-start justify-between">
                    <p class="text-xs font-semibold uppercase tracking-wide text-text-subtle">{{ $label }}</p>
                    <x-ui.badge :type="$type">{{ $meta }}</x-ui.badge>
                </div>
                <p class="mt-4 text-3xl font-extrabold text-text">{{ $value }}</p>
            </x-ui.card>
        @endforeach
    </div>

    <div class="mt-6 grid gap-6 xl:grid-cols-[1.35fr_0.65fr]">
        <x-ui.card :padding="false" class="overflow-hidden">
            <div class="border-b border-border p-5">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-text">Recent orders</h2>
                        <p class="text-sm text-text-muted">Newest activity across the marketplace.</p>
                    </div>
                    <x-ui.select class="max-w-44" aria-label="Filter orders">
                        <option>Today</option>
                        <option>This week</option>
                        <option>This month</option>
                    </x-ui.select>
                </div>
            </div>
            <x-ui.table :columns="['Order', 'Customer', 'Vendor', 'Status', 'Total']">
                @foreach([
                    ['#BM-2048', 'Akosua A.', 'Amina Fresh Foods', 'Ready', 'GHS 248'],
                    ['#BM-2047', 'Peter L.', 'Savanna Spice House', 'Pending', 'GHS 93'],
                    ['#BM-2046', 'Mariam N.', 'Nyariga Basket Co.', 'Delivered', 'GHS 520'],
                    ['#BM-2045', 'Daniel O.', 'Amina Fresh Foods', 'Review', 'GHS 146'],
                ] as [$order, $customer, $vendor, $status, $total])
                    <tr class="transition hover:bg-surface-muted">
                        <td class="whitespace-nowrap px-4 py-4 font-semibold text-text">{{ $order }}</td>
                        <td class="whitespace-nowrap px-4 py-4 text-text-muted">{{ $customer }}</td>
                        <td class="whitespace-nowrap px-4 py-4 text-text-muted">{{ $vendor }}</td>
                        <td class="whitespace-nowrap px-4 py-4">
                            <x-ui.badge :type="$status === 'Delivered' ? 'success' : ($status === 'Pending' ? 'warning' : ($status === 'Review' ? 'danger' : 'info'))">{{ $status }}</x-ui.badge>
                        </td>
                        <td class="whitespace-nowrap px-4 py-4 font-semibold text-text">{{ $total }}</td>
                    </tr>
                @endforeach
            </x-ui.table>
        </x-ui.card>

        <div class="space-y-6">
            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-text">Category mix</h2>
                        <p class="text-sm text-text-muted">Share of this week's sales.</p>
                    </div>
                    <x-ui.badge type="info">Live</x-ui.badge>
                </div>
                <div class="mt-5 space-y-4">
                    @foreach([['Fresh produce', '76%', 'w-[76%]'], ['Baskets', '48%', 'w-[48%]'], ['Dry goods', '36%', 'w-[36%]']] as [$label, $value, $width])
                        <div>
                            <div class="mb-1 flex justify-between text-sm font-medium"><span>{{ $label }}</span><span class="text-text-muted">{{ $value }}</span></div>
                            <div class="h-2 rounded-full bg-surface-subtle"><div class="{{ $width }} h-2 rounded-full bg-primary"></div></div>
                        </div>
                    @endforeach
                </div>
            </x-ui.card>

            <x-ui.card>
                <h2 class="text-lg font-semibold text-text">Quick product intake</h2>
                <div class="mt-5 space-y-4">
                    <x-ui.input label="Product name" name="product_name" placeholder="e.g. Red millet" />
                    <x-ui.select label="Category" name="category">
                        <option>Fresh produce</option>
                        <option>Woven goods</option>
                        <option>Dry goods</option>
                    </x-ui.select>
                    <x-ui.button class="w-full">Save draft</x-ui.button>
                </div>
            </x-ui.card>
        </div>
    </div>
@endcomponent
