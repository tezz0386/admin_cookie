@extends('layouts.front-app')
@section('content')
<div id="content" class="site-content">
  <div class="wrapper">
    <div class="container">
      @if(isset($products) && !$products == '')
      <div class="row about-wrapper">
        <div class="col-md-12">
          <h1 class="c-title">{{$products->title}}</h1>
          <p class="mb-6">
            {!! $products->description !!}
          </p>
        </div>
      </div>
      <div class="about-content row all-cookies">
        @foreach($products->products as $p)
        <div class="col-md-4 card">
          <div class="dc-img">
            <img src="{{asset('uploads/product/thumbnail/'.$p->image)}}" class="img-fluid">
          </div>
          <div class="dc-info">
            <h3>{{$p->title}}</h3>
            <p>{{$p->description}}</p>
            <!-- <a href="#" class="btn order-now">order now</a> -->
          </div>
        </div>
        @endforeach
      </div>
        @endif
      </div> <!-- .container -->
      </div><!--- .wrapper -->
    </div>
    @endsection
    @section('title', $products->title_tag)
    @section('meta_keywords', $products->meta_keywords)
    @section('meta_description', $products->meta_description)