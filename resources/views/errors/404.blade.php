<!-- This example requires Tailwind CSS v2.0+ -->
@extends('master')
@section('meta')
    <title>404 - Page Not Found | Lacar-MDX</title>
@endsection

@section('content')
    {{ Breadcrumbs::render('errors.404') }}
    <main class="bg-top bg-cover max-h-3/4 sm:bg-top"
        style="background-image: url('https://images.unsplash.com/photo-1545972154-9bb223aac798?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3050&q=80&exp=8&con=-15&sat=-75');">
        <div class="px-4 py-16 mx-auto text-center max-w-7xl sm:px-6 sm:py-24 lg:px-8 lg:py-48">
            <p class="text-sm font-semibold tracking-wide text-black text-opacity-50 uppercase">404 error</p>
            <h1 class="mt-2 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Uh oh! I think you’re lost.</h1>
            <p class="mt-2 text-lg font-medium text-black text-opacity-50">It looks like the page you’re looking for doesn't
                exist.</p>
            <div class="mt-6">
                <a href="/"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-black text-opacity-75 bg-white bg-opacity-75 border border-transparent rounded-md sm:bg-opacity-25 sm:hover:bg-opacity-50">
                    Go back home
                </a>
            </div>
        </div>
    </main>
@endsection
