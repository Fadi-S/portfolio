@props(['name', 'value'])

<div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                {{ $svg }}
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        {{ $name }}
                    </dt>
                    <dd>
                        <div class="text-lg font-medium text-gray-900">
                            {{ $value }}
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    @isset($footer)
        <div class="bg-gray-50 px-5 py-3">
            {{ $footer }}
        </div>
    @endisset
</div>