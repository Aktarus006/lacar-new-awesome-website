@extends('master')
@section('meta')
<title>{{ $kit->meta_title }} | Lacar-MDX</title>
@endsection

@section('content')
<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ $kit->name }}</p>
@endsection