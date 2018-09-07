@extends('layout.html-wrapper')

@section('title')
    {{$title}}
@endsection

@section('body-content')
<div class="title m-b-md">
  {{$heading}}
</div>
{!! Form::open(['url'=>'products/store'])!!}
{!! Form::text('name') !!}
{!! Form::text('slug','new product')!!}
{!! Form::submit('Save') !!}
{!!Form::close()!!}
@endsection
