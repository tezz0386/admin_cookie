@extends('layouts.front-app')
@section('content')
<div id="content" class="site-content">
  @if(isset($categories) && !$categories == '')
  <div class="wrapper">
    <div class="container">
      <div class="row about-wrapper">
        <div class="col-md-12">
          <h1 class="c-title">{{$categories->title}}</h1>
          <p class="mb-6">{!!$categories->description!!}</p>
        </div>
      </div>
      @foreach($categories->products as $product)
      <div class="about-content row">
        <div class="col-md-6">
          <h1>{{$product->title}}</h1>
          <p>{{$product->description}}</p>
          <!-- <a href="#" class="btn order-now">order now</a> -->
        </div>
        <div class="col-md-6">
          <img src="{{asset('uploads/product/thumbnail/'.$product->image)}}" class="img-fluid">
        </div>
        </div> <!-- .container -->
        @endforeach
        </div><!--- .wrapper -->
      </div>
      @endif
    </div>
    @endsection
    @if(isset($metaInfo) && !$metaInfo == '')
    @section('title', $metaInfo['title_tag'])
    @section('meta_keywords', $metaInfo['meta_keywords'])
    @section('meta_description', $metaInfo['meta_description'])
    @endif