<x-base>
    <x-slot name="title">{{ $title ?? "Dashboard" }}</x-slot>


    <div class="" style="">
        <div style="min-height: 640px;">

            <div class="h-screen flex overflow-hidden bg-gray-100" x-data="{ sidebarOpen: false }"
                 @keydown.window.escape="sidebarOpen = false">
                <div x-show="sidebarOpen" class="lg:hidden"
                     x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state."
                     style="display: none;">
                    <div class="fixed inset-0 flex z-40">
                        <div @click="sidebarOpen = false"
                             x-show="sidebarOpen"
                             x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
                             x-transition:enter="transition-opacity ease-linear duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition-opacity ease-linear duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="fixed inset-0" style="display: none;">
                            <div class="absolute inset-0 bg-gray-600 opacity-75" aria-hidden="true"></div>
                        </div>
                        <div x-show="sidebarOpen"
                             x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                             x-transition:enter="transition ease-in-out duration-300 transform"
                             x-transition:enter-start="-translate-x-full"
                             x-transition:enter-end="translate-x-0"
                             x-transition:leave="transition ease-in-out duration-300 transform"
                             x-transition:leave-start="translate-x-0"
                             x-transition:leave-end="-translate-x-full"
                             class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-700"
                             style="display: none;">
                            <div class="absolute top-0 right-0 -mr-12 pt-2">
                                <button x-show="sidebarOpen" @click="sidebarOpen = false"
                                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                        style="display: none;">
                                    <span class="sr-only">Close sidebar</span>
                                    <svg class="h-6 w-6 text-white" x-description="Heroicon name: x"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex-shrink-0 flex items-center px-4">
                                <img class="h-8 w-auto" src="{{ asset('images/logo.svg') }}" alt="logo">
                                <span class="text-xl font-bold text-gray-100 ml-6">Portfolio</span>
                            </div>
                            <nav class="mt-5 flex-shrink-0 h-full overflow-y-auto" aria-label="Sidebar">
                                <div class="px-2 space-y-1">

                                    <x-layout.navbar.link :url="$adminUrl">
                                        <x-slot name="svg">
                                            <svg class="h-6 w-6"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0
                                                      01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0
                                                      001 1m-6 0h6"></path>
                                            </svg>
                                        </x-slot>
                                        Home
                                    </x-layout.navbar.link>

                                    <x-layout.navbar.link :url="$adminUrl . '/users'">
                                        <x-slot name="svg">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                                            </svg>
                                        </x-slot>

                                        Projects
                                    </x-layout.navbar.link>

                                    <x-layout.navbar.link :url="$adminUrl . '/users'">
                                        <x-slot name="svg">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7
                                                       20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002
                                                       5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0
                                                        014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </x-slot>

                                        Users
                                    </x-layout.navbar.link>

                                </div>
                            </nav>
                        </div>
                        <div class="flex-shrink-0 w-14" aria-hidden="true"></div>
                    </div>
                </div>

                <!-- Static sidebar for desktop -->
                <div class="hidden lg:flex lg:flex-shrink-0">
                    <div class="flex flex-col w-64">
                        <!-- Sidebar component, swap this element with another sidebar if you like -->
                        <div class="flex flex-col flex-grow bg-gray-700 pt-5 pb-4 overflow-y-auto">
                            <div class="flex items-center flex-shrink-0 px-4">
                                <img class="h-8 w-auto" src="{{ asset('images/logo.svg') }}" alt="logo">
                            </div>
                            <nav class="mt-5 flex-1 flex flex-col overflow-y-auto" aria-label="Sidebar">
                                <div class="px-2 space-y-1">
                                    <x-layout.navbar.link :url="$adminUrl">
                                        <x-slot name="svg">
                                            <svg class="h-6 w-6"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0
                                                      01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0
                                                      001 1m-6 0h6"></path>
                                            </svg>
                                        </x-slot>
                                        Home
                                    </x-layout.navbar.link>

                                    <x-layout.navbar.link :url="$adminUrl . '/users'">
                                        <x-slot name="svg">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                                            </svg>
                                        </x-slot>

                                        Projects
                                    </x-layout.navbar.link>

                                    <x-layout.navbar.link :url="$adminUrl . '/users'">
                                        <x-slot name="svg">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7
                                                       20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002
                                                       5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0
                                                        014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </x-slot>

                                        Users
                                    </x-layout.navbar.link>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div x-init="$el.focus()" class="flex-1 overflow-auto focus:outline-none" tabindex="0">
                    <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none">
                        <button @click.stop="sidebarOpen = true"
                                class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: menu-alt-1"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h8m-8 6h16"></path>
                            </svg>
                        </button>
                        <!-- Search bar -->
                        <div class="flex-1 px-4 flex justify-between sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                            <div class="flex-1 flex">
                                <form class="w-full flex md:ml-0" action="#" method="GET">
                                    <label for="search_field" class="sr-only">Search</label>
                                    <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none"
                                             aria-hidden="true">
                                            <svg class="h-5 w-5" x-description="Heroicon name: search"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input id="search_field" name="search_field"
                                               class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm"
                                               placeholder="Search transactions" type="search">
                                    </div>
                                </form>
                            </div>
                            <div class="ml-4 flex items-center md:ml-6">
                                <div class="ml-3 relative" x-data="{ open: false }"
                                     @keydown.window.escape="open = false" @click.away="open = false">
                                    <div>
                                        <button @click="open = !open" class="max-w-xs bg-white rounded-full flex items-center text-sm
                                         focus:outline-none focus:ring-0 lg:p-2 lg:rounded-md
                                          lg:hover:bg-gray-50" id="user-menu" aria-haspopup="true"
                                                x-bind:aria-expanded="open">

                                            <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->picture }}"
                                                 alt="">
                                            <span class="hidden ml-3 text-gray-700 text-sm font-medium lg:block">
                                                <span class="sr-only">Open user menu for </span>{{ auth()->user()->name }}</span>
                                            <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block"
                                                 x-description="Heroicon name: chevron-down"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div x-show="open"
                                         x-description="Profile dropdown panel, show/hide based on dropdown state."
                                         x-transition:enter="transition ease-out duration-100"
                                         x-transition:enter-start="transform opacity-0 scale-95"
                                         x-transition:enter-end="transform opacity-100 scale-100"
                                         x-transition:leave="transition ease-in duration-75"
                                         x-transition:leave-start="transform opacity-100 scale-100"
                                         x-transition:leave-end="transform opacity-0 scale-95"
                                         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md
                                          shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                                         role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
                                         style="display: none;">

                                        <a href="{{ url("$adminUrl/profile") }}"
                                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                           role="menuitem">Your Profile</a>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500
                                             hover:bg-gray-100" role="menuitem">Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
                        <!-- Page header -->
                        <div class="bg-white shadow">
                            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                                <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                                    <div class="flex-1 min-w-0">
                                        <!-- Profile -->
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{ $slot }}

                    </main>
                </div>
            </div>

        </div>
    </div>
</x-base>