@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-product Show', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <center><strong>{{$product->title}}</strong></center>
        </div>
        <div class="card-body">
            <center>
            @if($product->child_id=='')
            <label> Belongs To {{$product->category->title}}</label>            
            @endif
             @if($product->parent_id=='')
            <label> Belongs To {{$product->subCategory->title}}</label>            
            @endif
            </center>
            <center>
                $ {{$product-price}}
            </center>
            <br>
            <center>
            <img src="{{asset('uploads/product/thumbnail/'.$product->image)}}" height="307" width="425">
            </center>
            <br>
            <div class="cantainer">
                <p>{{$product->description}}</p>
            </div>
        </div>
    </div>
</div>
@endsection