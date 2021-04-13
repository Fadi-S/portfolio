@props([
    'label' => null,
    'id' => rand(0, 9999),
    'max' => 0,
    'error' => null,
])

@php
    if(is_array($error))
        $error = $error[0] ?? null;
@endphp

<div>
    <div class="flex justify-between">
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-900">{{ $label }}</label>
        @if($max > 0)
            <span id="{{ $id }}-max" class="text-sm text-gray-500">Max. {{ $max }} characters</span>
        @endif
    </div>
    <div class="mt-1 relative rounded-md shadow-sm">
    <textarea id="{{ $id }}" name="{{ $id }}" rows="4" {{ $attributes }}
    class="block py-3 px-4 block w-full shadow-sm rounded-md
     {{ $error ? 'border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500'
               : 'text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300' }}"
              aria-describedby="{{ $id }}-max"></textarea>
        @if($error)
            <div class="absolute mt-2 inset-y-0 right-0 pr-3 flex items-start pointer-events-none">
                <x-svg.exclamation color="text-red-500" />
            </div>
        @endif
    </div>
    @if($error)
        <p class="mt-2 text-sm text-red-600" id="{{ $id }}-error">{{ $error }}</p>
    @endif
</div>
