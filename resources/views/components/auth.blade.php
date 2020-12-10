<x-base>
    <x-slot name="title">{{ $title ?? "Login to Admin panel" }}</x-slot>

    <div class="min-h-screen bg-white flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                {{ $slot }}
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <picture class="absolute inset-0 w-full h-full object-cover" alt="dashboard">
                <source media="(min-width:768px)"
                        srcset="{{ asset('images/medium/background-admin.jpg') }}">
                <source media="(min-width:465px)"
                        srcset="{{ asset('images/small/background-admin.jpg') }}">
                <source media="(min-width:1020px)"
                        srcset="{{ asset('images/large/background-admin.jpg') }}">

                <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('images/large/background-admin.jpg') }}" alt="dashboard">
            </picture>
        </div>
    </div>
</x-base>