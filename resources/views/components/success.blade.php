@props([
    'title',
    'message',
])

<div class="rounded-md bg-green-50 p-4 col-span-2">
    <div class="flex justify-center">
        <div class="flex-shrink-0">
            <x-svg.check color="text-green-400" />
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-green-800">
                {{ $title }}
            </h3>
            <div class="mt-2 text-sm text-green-700">
                <p>
                    {{ $message }}
                </p>
            </div>
        </div>
    </div>
</div>
