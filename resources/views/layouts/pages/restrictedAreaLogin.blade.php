@extends('master')
@section('content')
<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
@if(Session::has('warning'))
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="p-4 rounded-md bg-yellow-50">
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- Heroicon name: solid/exclamation -->
            <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-yellow-800">
                Attention needed
            </h3>
            <div class="mt-2 text-sm text-yellow-700">
                <p>
                    {{Session::get('warning')}}
                </p>
            </div>
        </div>
    </div>
</div>
@endif
<div class="flex min-h-screen bg-white">
    <div class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="w-full max-w-sm mx-auto lg:w-96">
            <div>
                <img class="w-auto h-12" src="https://lacar-mdx.com/images/lacar-logo.png" alt="Workflow">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Restricted Area
                </h2>
                <p class="mt-2 text-sm text-gray-600 max-w">
                    Here you will find our technical manuals, flyers, CE declatations and MSDS. Please enter your
                    password to have access to this section.
                </p>
            </div>

            <div class="mt-8">
                <div>



                </div>

                <div class="mt-6">
                    <form action="/login" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="username" id="username" value="lacar">
                        <div class="space-y-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                            </div>
                        </div>



                        <div>
                            <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-yellow-600 border border-transparent rounded-md shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="relative flex-1 hidden w-0 lg:block">
        <img class="absolute inset-0 object-cover w-full h-full"
            src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
            alt="">
    </div>
</div>

@endsection