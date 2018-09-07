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
@foreach ($products as $product)
    <p>Product Name :  {{ $product->product_name }}</p>
    <p>category :  {{ $product->product_id }}</p>
@endforeach

{!! Form::text('name') !!}
{!! Form::text('product','new product',
  [
    'class'=>'claasnew',
    'placeholder'=>'enter product name'
  ]
)!!}


@endsection
