<x-auth>
    <div>
        <img class="h-12 w-auto" src="{{ url('images/logo.svg') }}" alt="Workflow">
        <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
            Reset Password
        </h2>
    </div>

    <div class="mt-8">
        <div class="mt-6">
            <form action="{{ url("$adminUrl/login") }}" method="POST" class="space-y-6">
                @csrf
                @honeypot

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}"
                               required class="appearance-none block w-full px-3 py-2 border border-gray-300
                               @if($errors->has("email")) ring-red-500 border-red-500 @else focus:ring-blue-500 @endif
                                rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm" />
                        @error("email")
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password"
                               required class="appearance-none block w-full px-3 py-2 border
                               border-gray-300 rounded-md shadow-sm placeholder-gray-400
                               focus:outline-none focus:ring-blue-500 focus:border-blue-500
                                sm:text-sm">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('password.email') }}" class="font-medium text-blue-600 hover:text-blue-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-auth>