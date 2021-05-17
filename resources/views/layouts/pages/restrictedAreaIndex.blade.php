@extends('master')
@section('content')
<h1>Isos</h1>
@foreach ($isos as $doc)
<a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">Download Resume </a>
@endforeach
<h1>Instructions</h1>
@foreach ($instructions as $doc)
<a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">Download Resume </a>
@endforeach

@endsection