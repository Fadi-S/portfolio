@props([
    'label' => null,
    'id' => rand(0, 9999),
    'type' => 'text',
    'optional' => false,
    'error' => null,
])

@php
    if(is_array($error))
        $error = $error[0] ?? null;
@endphp

<div>
    @if($optional)
        <div class="flex justify-between">
            <label for="{{ $id }}" class="block text-sm font-medium text-gray-900">{{ $label }}</label>
            <span id="{{ $id }}-optional" class="text-sm text-gray-500">Optional</span>
        </div>
    @else
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-900">{{ $label }}</label>
    @endif

    <div class="mt-1 relative rounded-md shadow-sm">
        <input type="{{ $type }}" name="{{ $id }}"
               id="{{ $id }}" {{ $attributes }}
               class="block py-3 px-4 block w-full shadow-sm rounded-md
               {{ $error
                    ? 'border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500'
                    : 'text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300' }}">

        @if($error)
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <x-svg.exclamation color="text-red-500" />
            </div>
        @endif

    </div>
    @if($error)
        <p class="mt-2 text-sm text-red-600" id="{{ $id }}-error">{{ $error }}</p>
    @endif
</div>