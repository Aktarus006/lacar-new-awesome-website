@extends('master')
@section('content')
<h1 class="text-xs font-medium tracking-wide text-gray-500 uppercase">Isos</h1>
@foreach ($isos as $doc)
<a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">Download Resume </a>
@endforeach
<h1 class="text-xs font-medium tracking-wide text-gray-500 uppercase">Instructions</h1>
@foreach ($instructions as $doc)
<a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">Download Resume </a>
@endforeach
<h1 class="text-xs font-medium tracking-wide text-gray-500 uppercase">CE Declarations</h1>
@foreach ($ces as $doc)
<a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">Download Resume </a>
@endforeach
<h1 class="text-xs font-medium tracking-wide text-gray-500 uppercase">Material Safety Data Sheet</h1>
@foreach ($sds as $doc)
<a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">Download Resume </a>
@endforeach
<h1 class="text-xs font-medium tracking-wide text-gray-500 uppercase">Flyers</h1>
@foreach ($flyers as $doc)
<a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">Download Resume </a>
@endforeach

@endsection