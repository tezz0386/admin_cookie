@extends('layouts.front-app')
@section('content')
<div id="content" class="site-content">
  <div class="wrapper">
    <div class="container">
      <div class="row about-wrapper">
        <div class="col-md-12">
          <h1 class="c-title"><span>About</span> {{SITE_TITLE}}</h1>
          <p class="mb-6">{{SITE_DESCRIPTION}}</p>
        </div>
      </div>
      @if(isset($aboutUs) && count($aboutUs)>0)
      <div class="about-content row">
        @foreach($aboutUs as $about)
        @if($about->heading == 'Our Vison')
        <div class="col-md-6">
          <h1>{{$about->heading}}</h1>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
        </div>
        <div class="col-md-6">
          <img src="{{asset('uploads/site/thumbnail/'.$about->image)}}" class="img-fluid">
        </div>
        @endif
        @if($about->heading == 'Our Approach')
        <div class="col-md-6">
          <img src="{{asset('uploads/site/thumbnail/'.$about->image)}}" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h1>Our Approach</h1>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
        </div>
        @endif
        @if($about->heading == 'Our Process')
        <div class="col-md-6">
          <h1>Our Process</h1>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
        </div>
        <div class="col-md-6">
          <img src="{{asset('uploads/site/thumbnail/'.$about->image)}}" class="img-fluid">
        </div>
        @endif
        @endforeach
      </div>
      @endif
      </div> <!-- .container -->
      </div><!--- .wrapper -->
    </div>
    @endsection
    @section('title', $metaInfo->title_tag)
    @section('keywords', $metaInfo->meta_keywords)
    @section('description', $metaInfo->meta_description)