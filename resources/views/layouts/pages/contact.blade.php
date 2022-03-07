@extends('master')

@section('content')
    @include('layouts.contactForm', [
        'subject' => 'Website Contact Form',
        'description' => 'Feel free to contact us !',
        'title' => 'You have
        a question ?',
    ])
@endsection
