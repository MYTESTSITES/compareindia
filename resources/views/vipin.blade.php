@extends('layout.html-wrapper')

@section('title')
    {{$title}}
@endsection

@section('body-content')
<div class="title m-b-md">
  {{$heading}}
</div>
<p>{{$content}}</p>
<p>-{{$author}}</p>
@endsection
