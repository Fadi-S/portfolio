@props(['url'])

<a href="{{ url($url) }}" class="{{ (url()->current() == $url ? 'bg-cyan-800 text-white' : 'text-cyan-100 hover:text-white hover:bg-cyan-600') }}
        group flex items-center px-2 py-2 text-base font-medium rounded-md" aria-current="page">
    <div class="space-x-2 flex">
        <div class="text-cyan-200">
            {{ $svg }}
        </div>

        <div>
            {{ $slot }}
        </div>
    </div>
</a>