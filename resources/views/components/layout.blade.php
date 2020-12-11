<x-base>
    <x-slot name="title">{{ $title ?? "Fadi Sarwat Portfolio" }}</x-slot>

    <div class="min-h-screen flex flex-col justify-between">
        <div class="relative bg-gray-50">
            <div x-data="{ open: false }" class="relative bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                        <div class="flex justify-start lg:w-0 lg:flex-1">
                            <a href="{{ url('/') }}">
                                <span class="sr-only">Fadi Sarwat Portfolio</span>
                                <img class="h-8 w-auto sm:h-10" src="{{ asset('images/logo.svg') }}" alt="Logo">
                            </a>
                        </div>

                        <nav class="space-x-10 md:flex hidden">

                            <a href="{{ url('/') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 rounded-lg hover:bg-gray-200 px-4 py-2">
                                Home
                            </a>

                            <a href="{{ url('/portfolio') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 rounded-lg hover:bg-gray-200 px-4 py-2">
                                Portfolio
                            </a>

                            <a href="{{ url('/pricing') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 rounded-lg hover:bg-gray-200 px-4 py-2">
                                Pricing
                            </a>

                            <a href="{{ url('contact') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 rounded-lg hover:bg-gray-200 px-4 py-2">
                                Contact Me
                            </a>

                        </nav>

                        <div class="-mr-2 -my-2 md:hidden">
                            <button @click="open=!open" type="button" class="bg-white rounded-md p-2 inline-flex items-center
                         justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none
                         focus:ring-2 focus:ring-inset focus:ring-blue-500">
                                <span class="sr-only">Open menu</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div style="display: none;"
                         x-show="open"
                         x-description="Mobile menu, show/hide based on menu open state."
                         x-transition:enter="duration-150 ease-out"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="duration-100 ease-in"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto sm:h-10" src="{{ asset('images/logo.svg') }}" alt="Logo">
                                </div>
                                <div class="-mr-2">
                                    <button @click="open=false" type="button"
                                            class="bg-white rounded-md p-2 inline-flex items-center justify-center
                                            text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none
                                            focus:ring-2 focus:ring-inset focus:ring-blue-500">
                                        <span class="sr-only">Close menu</span>
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                                <div class="px-2 pt-2 pb-3" role="none">
                                    <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                                 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Home</a>

                                    <a href="{{ url('/portfolio') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                                 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Portfolio</a>

                                    <a href="{{ url('/pricing') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                                 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Pricing</a>

                                    <a href="{{ url('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700
                                 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="lg:relative container mx-auto">
                {{ $slot }}
            </main>
        </div>

        <footer class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 md:order-2">
                    <a href="https://www.fiverr.com/fadisarwat" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Fiverr</span>
                        <svg class="h-5 w-5" fill="currentColor" aria-hidden="true" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z"/>
                        </svg>
                    </a>

                    <a href="https://twitter.com/fadi_sarwat" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>

                    <a href="https://github.com/Fadi-S" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>

                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <p class="text-center text-base text-gray-400">
                        &copy; 2020 Fadi Sarwat. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>

</x-base>