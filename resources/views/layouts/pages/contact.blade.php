@extends('master')

@section('content')
    @include('layouts.contactForm', ['subject' => 'Test', 'description' => 'Feel free to contact us !', 'title' => 'You have
    a question ?'])
@endsection
