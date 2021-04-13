@props([
    'color' => 'text-white bg-blue-600 hover:bg-blue-700',
])

<button {{ $attributes }}
        class="mt-2 w-full inline-flex items-center justify-center px-6 py-3
         border border-transparent rounded-md shadow-sm text-base
         font-medium {{ $color }}
         focus:outline-none focus:ring-2 focus:ring-offset-2
          focus:ring-blue-500 sm:w-auto">

    @isset($svg)
        <div class="mr-2">
            {{ $svg }}
        </div>
    @endisset

    {{ $slot }}
</button>