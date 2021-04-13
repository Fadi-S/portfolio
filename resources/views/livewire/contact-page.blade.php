<div>

    <div class="bg-transparent">
        <div class="max-w-7xl mx-auto py-16 sm:py-24 sm:px-6 lg:px-8">
            <div class="relative bg-white shadow-xl">
                <h2 class="sr-only">Contact me</h2>

                <div class="grid grid-cols-1 lg:grid-cols-3">
                    <!-- Contact information -->
                    <div class="relative overflow-hidden py-10 px-6 bg-blue-700 sm:px-10 xl:p-12">
                        <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
                            <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                                <defs>
                                    <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff"></stop>
                                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
                            <svg class="absolute inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                                <defs>
                                    <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff"></stop>
                                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
                            <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none"
                                 preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                                <defs>
                                    <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff"></stop>
                                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-white">Contact information</h3>
                        <p class="mt-6 text-base text-indigo-50 max-w-3xl">
                            Send me what you want to design, your idea and if you have any questions.
                        </p>
                        <dl class="mt-8 space-y-6">
                            <dt><span class="sr-only">Phone number</span></dt>
                            <dd class="flex text-base text-indigo-50">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="ml-3">+2 (012) 7331-5870</span>
                            </dd>
                            <dt><span class="sr-only">Email</span></dt>
                            <dd class="flex text-base text-indigo-50">
                                <!-- Heroicon name: outline/mail -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">fady.sarwat377@gmail.com</span>
                            </dd>
                        </dl>
                        <ul class="mt-8 flex space-x-12" role="list">
                            <li>
                                <x-links.github />
                            </li>
                            <li>
                                <x-links.fiverr />
                            </li>
                        </ul>
                    </div>

                    <!-- Contact form -->
                    <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                        <h3 class="text-lg font-medium text-gray-900">Send us a message</h3>
                        <form wire:submit.prevent="submit" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">

                            <x-form.input label="First name"
                                          :error="$errors->get('first_name')"
                                          autocomplete="given-name" id="first_name" wire:model.lazy="first_name" />

                            <x-form.input label="Last name"
                                          :error="$errors->get('last_name')"
                                          autocomplete="family-name" id="last_name" wire:model.lazy="last_name" />

                            <x-form.input label="Email"
                                          :error="$errors->get('email')"
                                          type="email" autocomplete="email" id="email" wire:model.lazy="email" />

                            <x-form.input label="Phone"
                                          :error="$errors->get('phone')"
                                          autocomplete="phone" id="phone" wire:model.lazy="phone" :optional="true" />

                            <div class="sm:col-span-2">
                                <x-form.input label="Subject"
                                              :error="$errors->get('subject')"
                                              type="text" id="subject" wire:model.lazy="subject" />
                            </div>

                            <div class="sm:col-span-2">
                                <x-form.textarea id="message" max="1500"
                                                 :error="$errors->get('body')"
                                                 label="Message" wire:model.lazy="body" />
                            </div>

                            <div class="sm:col-span-2 sm:flex sm:justify-end">
                                <x-form.button type="submit"
                                               data-sitekey="{{ config('app.recaptcha_key') }}"
                                               data-callback='handle'
                                               data-action='submit'>
                                    <x-slot name="svg">
                                        <x-svg.spinner wire:loading wire:target="submit" />
                                        <x-svg.mail wire:loading.remove wire:target="submit" />
                                    </x-slot>

                                    Submit
                                </x-form.button>
                            </div>

                            @if(session()->has('success'))
                                <x-success :message="session('success')['message']"
                                           :title="session('success')['title']" />
                            @endif
                        </form>

                        @push('scripts')
                            <script src="https://www.google.com/recaptcha/api.js?render={{ config('app.recaptcha_key') }}"></script>
                            <script>
                                function handle(e) {
                                    grecaptcha.ready(function () {
                                        grecaptcha.execute('{{ config('app.recaptcha_key') }}', {action: 'submit'})
                                            .then(function (token) {
                                            @this.set('captcha', token);

                                            console.log(token);
                                            });
                                    })
                                }
                            </script>
                        @endpush
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
