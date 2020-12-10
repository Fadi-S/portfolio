@props(['url'])

<a href="{{ url($url) }}" class="{{ (url()->current() == url($url) ? 'bg-gray-500 text-cyan-100' : 'text-cyan-100 hover:bg-gray-600') }}
        group flex items-center px-2 py-2 text-base font-medium rounded-md" aria-current="page">
    <div class="space-x-2 flex">
        <div>{{ $svg }}</div>

        <div>{{ $slot }}</div>
    </div>
</a>