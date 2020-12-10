<x-admin>
    <x-slot name="title">Dashboard</x-slot>

    <x-slot name="header">
        <div class="flex items-center">
            <img class="hidden h-16 w-16 rounded-full sm:block"
                 src="{{ auth()->user()->picture }}" alt="">
            <div class="flex items-center">
                <img class="h-16 w-16 rounded-full sm:hidden"
                     src="{{ auth()->user()->picture }}"
                     alt="">
                <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                    Good morning, {{ auth()->user()->name }}
                </h1>
            </div>
        </div>
    </x-slot>

    <div class="mt-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
            <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                <x-layout.small-card>
                    <x-slot name="svg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </x-slot>

                    <x-slot name="name">Total Page Views</x-slot>

                    <x-slot name="value">{{ \App\Models\PageView::count() }}</x-slot>

                    <x-slot name="footer">
                        <div class="text-sm">
                            <a href="{{ url("$adminUrl/views") }}"
                               class="font-medium text-cyan-700 hover:text-cyan-900">
                                View all
                            </a>
                        </div>
                    </x-slot>
                </x-layout.small-card>

                <x-layout.small-card>
                    <x-slot name="svg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                    </x-slot>

                    <x-slot name="name">Unique Page Views</x-slot>

                    <x-slot name="value">{{ \App\Models\PageView::unique('url')->count() }}</x-slot>

                    <x-slot name="footer">
                        <div class="text-sm">
                            <a href="{{ url("$adminUrl/views?unique=url") }}"
                               class="font-medium text-cyan-700 hover:text-cyan-900">
                                View all
                            </a>
                        </div>
                    </x-slot>
                </x-layout.small-card>

                <x-layout.small-card>
                    <x-slot name="svg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </x-slot>

                    <x-slot name="name">Unique Visits</x-slot>

                    <x-slot name="value">{{ \App\Models\PageView::unique('ip')->count() }}</x-slot>

                    <x-slot name="footer">
                        <div class="text-sm">
                            <a href="{{ url("$adminUrl/views?unique=ip") }}"
                               class="font-medium text-cyan-700 hover:text-cyan-900">
                                View all
                            </a>
                        </div>
                    </x-slot>
                </x-layout.small-card>

            </div>
        </div>
    </div>
</x-admin>