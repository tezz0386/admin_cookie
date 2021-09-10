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
        <h1 class="text-center"> Cookies  </h1>
        @if(isset($cookies) && count($cookies)>0)
        @foreach($cookies as $cookie)
        @foreach($cookie->products as $product)
        <div class="col-md-4 cookie-discription">
          <img src="{{asset('uploads/product/thumbnail/'.$product->image)}}" class="img-fluid">
          <div class="cookie-info">
            <h2>{{$product->title}}</h2>
            <p>{{Substr($product->description, 0, 200)}}</p>
            <!-- <button type="button" class="btn btn-danger">Order Now</button> -->
          </div>
        </div>
        @endforeach
        @endforeach
        @endif
      </div>
      @if(isset($cornflakes) && !$cornflakes=='')
      <div class="cornflakes row">
        <h1 class="text-center"> Cornflakes </h1>
        @foreach($cornflakes->products as $product)
        <div class="col-md-4 cornflakes-discription">
          <img src="{{asset('uploads/product/thumbnail/'.$product->image)}}" class="img-fluid">
          <div class="cornflakes-info">
            <h2>{{$product->title}}</h2>
            <p>{{Substr($product->description, 0, 200)}}</p>
            <!-- <button type="button" class="btn btn-danger">Order Now</button> -->
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </div>
    </div><!--- .wrapper -->
  </div>
  @endsection
  @if(isset($cornflakes) && !$cornflakes == '')
  @section('title', $cornflakes->title_tag)
  @section('meta_keywords', $cornflakes->meta_keywords)
  @section('meta_description', $cornflakes->meta_description)
  @endif