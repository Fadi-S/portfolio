@props(['url'])

<a href="{{ url($url) }}"
   class="text-base font-medium text-gray-500 hover:text-gray-900 rounded-lg
   {{ (url()->current() === url($url) ? 'bg-gray-200 text-gray-600 hover:bg-gray-300' : 'hover:bg-gray-200') }}
    px-4 py-2">

    {{ $slot }}
</a>