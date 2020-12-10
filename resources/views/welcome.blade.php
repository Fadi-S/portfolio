<x-layout>

    <x-slot name="title">Welcome to My Portfolio</x-slot>

    <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
        <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl lg:text-4xl xl:text-5xl">
                <span class="block xl:inline">Have your own</span>
                <span class="block text-blue-500 xl:inline">professional website</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                Developing professional websites and solutions that fits you best.
            </p>
            <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a href="https://www.fiverr.com/share/b0Qxx1" target="_blank"
                       class="bg-gradient-to-r from-blue-500 to-red-400 hover:from-red-400 hover:to-blue-500
                    w-full flex items-center justify-center px-8 py-3 border border-transparent
                     text-base font-medium rounded-md text-white md:py-4 md:text-lg md:px-10">
                        Order your website now!
                    </a>
                </div>
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                    <a href="{{ url('/portfolio') }}" class="w-full flex items-center justify-center
                     px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                        See My Work
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
        <picture class="absolute inset-0 w-full h-full object-cover" alt="laptop elegant">
            <source media="(min-width:768px)"
                    srcset="{{ asset('images/medium/welcome-page.jpg') }}">
            <source media="(min-width:465px)"
                    srcset="{{ asset('images/small/welcome-page.jpg') }}">
            <source media="(min-width:1020px)"
                    srcset="{{ asset('images/large/welcome-page.jpg') }}">

            <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('images/large/welcome-page.jpg') }}" alt="laptop elegant">
        </picture>
    </div>
</x-layout>