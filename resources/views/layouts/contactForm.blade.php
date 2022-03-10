<div class="relative bg-white" id="contact">
    <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="object-cover object-left-top w-full h-56 lg:absolute lg:h-full"
                src="{{ asset('images/lacar-56.jpg') }}" alt="">
        </div>
    </div>
    <div class="relative px-4 pt-12 pb-16 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
        <div class="lg:pr-8">
            <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                    {{ strip_tags($title) }}
                </h2>

                <p class="mt-4 text-lg text-gray-500 sm:mt-3">
                    {{ $description }}
                </p>

                @if ($success = session('success'))
                    <div class="w-full p-5 bg-green-100 rounded-md">
                        <div class="flex justify-between">
                            <div class="flex space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="flex-none w-4 h-4 text-green-500 fill-current">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                                <div class="flex-1 text-sm font-medium leading-tight text-green-700">{{ $success }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif


                @if (count($errors))
                    <div class="w-full p-5 bg-red-100 rounded-md">
                        <div class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="flex-none w-4 h-4 text-red-500 fill-current">
                                <path
                                    d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z" />
                            </svg>
                            <div class="flex flex-col space-y-2 leading-tight">
                                <div class="text-sm font-medium text-red-700">Something went wrong</div>
                            </div>
                        </div>
                    </div>
            </div>
            @endif
            <form action="{{ action('App\Http\Controllers\ContactFormController@contactForm') }}" method="POST"
                class="grid grid-cols-1 mt-9 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                @csrf
                <input type="hidden" name="subject" id="subject" value=" {{ $subject }}">
                <div class="sm:col-span-2">
                    <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    @if ($errors->has('full_name'))
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <input type="text" name="full_name" id="full_name"
                                class="block w-full pr-10 text-red-900 placeholder-red-300 border-red-300 rounded-md focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm"
                                placeholder="John Doe" value="{{ old('full_name') }}" aria-invalid="true"
                                aria-describedby="full_name-error">
                        </div>
                        <p class="mt-2 text-sm text-red-600" id="full_name-error">{{ $errors->first('full_name') }}
                        </p>
                    @else
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <input type="text" name="full_name" id="full_name" autocomplete="given-name"
                                placeholder="John Doe"
                                class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-lacar-500 focus:border-lacar-500">
                        </div>
                    @endif
                </div>

                <div class="sm:col-span-2">

                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    @if ($errors->has('email'))
                        <div class="relative mt-1 rounded-md shadow-sm">

                            <input type="text" name="email" id="email"
                                class="block w-full pr-10 text-red-900 placeholder-red-300 border-red-300 rounded-md focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm"
                                placeholder="john.doe@example.com" value="{{ old('email') }}" aria-invalid="true"
                                aria-describedby="email-error">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <!-- Heroicon name: solid/exclamation-circle -->
                                <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $errors->first('email') }}</p>
                    @else
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <!-- Heroicon name: solid/mail -->
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <input type="text" name="email" id="email"
                                class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="john.doe@example.com" value="{{ old('email') }}">
                        </div>
                    @endif
                </div>

                <div class="sm:col-span-2">

                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    @if ($errors->has('phone'))
                        <div class="relative mt-1 rounded-md shadow-sm">

                            <input type="text" name="phone" id="phone"
                                class="block w-full pr-10 text-red-900 placeholder-red-300 border-red-300 rounded-md focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm"
                                placeholder="1234567890" value="{{ old('phone') }}" aria-invalid="true"
                                aria-describedby="phone-error">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <!-- Heroicon name: solid/exclamation-circle -->
                                <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-red-600" id="phone-error">{{ $errors->first('phone') }}</p>
                    @else
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <!-- Heroicon name: solid/phone -->
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>

                            </div>
                            <input type="text" name="phone" id="phone"
                                class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="1234567890" value="{{ old('phone') }}">
                        </div>
                    @endif
                </div>
                <div class="sm:col-span-2">
                    <div class="flex justify-between">
                        <label for="message" class="block text-sm font-medium text-gray-700">How can we help
                            you?</label>
                        <span id="message_description" class="text-sm text-gray-500">Max. 500
                            characters</span>
                    </div>
                    <div class="mt-1">
                        <textarea id="message" name="message" aria-describedby="message_description" rows="4"
                            class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm focus:ring-lacar-500 focus:border-lacar-500"></textarea>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <div class="inline-flex justify-center g-recaptcha"
                        data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}">
                    </div>

                </div>
                <div class="text-right sm:col-span-2">
                    <button type="submit"
                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-lacar-500 hover:bg-lacar-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lacar-500">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
