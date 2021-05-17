@extends('master')
@section('content')
<h1 class="text-xs font-medium tracking-wide text-gray-500 uppercase">Isos</h1>
<ul class="grid grid-cols-1 gap-5 mt-3 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
    @foreach ($isos as $doc)
    <a class="primary-btn" href="{{route('downloadFile',$doc->id)}}">
        <li class="flex col-span-1 rounded-md shadow-sm">
            <div
                class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">
                ISO
            </div>
            <div class="flex-1 px-4 py-2 text-sm truncate">
                <a href="#" class="font-medium text-gray-900 hover:text-gray-600">{{ $doc->name }}</a>
            </div>
        </li>
    </a>
    @endforeach
</ul>
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