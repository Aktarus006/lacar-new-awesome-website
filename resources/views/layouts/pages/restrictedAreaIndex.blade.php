@extends('master')
@section('content')
@foreach ($documents as $doc)
<a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">Download Resume </a>
@endforeach


@endsection