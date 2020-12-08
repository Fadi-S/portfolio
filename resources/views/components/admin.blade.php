<x-base>
    <x-slot name="title">{{ $title ?? "Dashboard" }}</x-slot>

    {{ $slot }}
</x-base>