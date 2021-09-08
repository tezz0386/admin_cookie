@extends('layouts.front-app')
@section('content')
<div id="content" class="site-content">
  <div class="wrapper">
    <div class="container">
      <div class="section-title">
        <!-- <h1  class="blog-title">Blog</h1> -->
        <!-- <p>Our all Products</p> -->
      </div>
      <div class="cookies row">
        <h1 class="text-center"> @if(isset($category) && !$category==''){{$category->title}}@endif</h1>

        @if(isset($product) && !$product == '')
        <div class="col-md-4 cookie-discription">
          <img src="{{asset('uploads/product/thumbnail/'.$product->image)}}" class="img-fluid">
          <div class="cookie-info">
            <h2>@if(isset($product) && !$product==''){{ $product->title}} @endif</h2>
            <p>@if(isset($product) && !$product==''){{ $product->description}} @endif</p>
            <!-- <button type="button" class="btn btn-danger">Order Now</button> -->
          </div>
        </div>
        @endif

        @if(isset($cookies) && count($cookies)>0)
        @foreach($cookies as $cookie)
        @foreach($cookie->products as $product)
        <div class="col-md-4 cookie-discription">
          <img src="{{asset('uploads/product/thumbnail/'.$product->image)}}" class="img-fluid">
          <div class="cookie-info">
            <h2>{{$product->title}}</h2>
            <p>{{$product->description}}</p>
            <!-- <button type="button" class="btn btn-danger">Order Now</button> -->
          </div>
        </div>
        @endforeach
        @endforeach
        @endif
      </div>


      @if(isset($cornflakes) && count($cornflakes)>0)
      <div class="cornflakes row">
        <h1 class="text-center"> Cornflakes </h1>
        @foreach($cornflakes as $conflake)
        @foreach($conflake->products as $product)
        <div class="col-md-4 cornflakes-discription">
          <img src="{{asset('uploads/product/thumbnail/'.$product->image)}}" class="img-fluid">
          <div class="cornflakes-info">
            <h2>{{$product->title}}</h2>
            <p>{{$product->description}}</p>
            <!-- <button type="button" class="btn btn-danger">Order Now</button> -->
          </div>
        </div>
        @endforeach
        @endforeach
      </div>

      @endif
    </div>
    </div><!--- .wrapper -->
  </div>
@endsection

@section('title', $subCategory->title_tag)
@section('meta_keywords', $subCategory->meta_keywords)
@section('meta_description', $subCategory->meta_description)