@extends('layouts.front-app')
@section('content')
<div id="content" class="site-content">
    <div class="wrapper">
        <div id="featured-slider" class="main-slider ">
            <div class="owl-carousel owl-theme slider-main">
                @if(isset($banners) && count($banners)>0)
                @foreach($banners as $banner)
                <div class="item main-banner">
                    <img src="{{asset('uploads/banner/thumbnail/'.$banner->image)}}" class="img-fluid">
                    <div class="main-sl-content">
                        
                        <h1>{{$banner->heading}}</h1>
                        
                    </div>
                </div>
                @endforeach
                @else
                <div class="item main-banner">
                    <img src="{{asset('front-assets/images/msl-01.jpg')}}" class="img-fluid">
                    <div class="main-sl-content">
                        
                        <h1>Enjoy Happy cookies everyday</h1>
                        
                    </div>
                </div>
                <div class="item main-banner">
                    <img src="{{asset('front-assets/images/msl-02.jpg')}}" class="img-fluid">
                    <div class="main-sl-content">
                        
                        <h1>Enjoy Happy cookies everyday</h1>
                        
                    </div>
                </div>
                <div class="item main-banner">
                    <img src="{{asset('front-assets/images/msl-03.jpg')}}" class="img-fluid">
                    <div class="main-sl-content">
                        
                        <h1>Enjoy Happy cookies everyday</h1>
                        
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div id="About-us" class=" main-section about-section w3-animate-fading w3-animate-zoom w3-animate-top">
            <div class="container">
                <div class="row">
                    <div class="location col-md-6">
                        <h1 id="about-title" class="title"> <span class="title-em">About</span> Us</h1>
                        @if(! SITE_DESCRIPTION == '')
                        <p>
                            {{ substr(SITE_DESCRIPTION, 0, 500) }}
                        </p>
                        @else
                        <p>This hub is for rising entrepreneurs in the "Art"  industry which we define as including but not limited to the following—artisans, fine artists, singers, performers, fitness experts, fashionistas foodies, and creatives. This curriculum has much overlap with the geographic based hubs, but offers a curriculum tailored to the specific needs of the art industry and self promotion in the creative business world. We invite any self-performing artists, artisans, creatives etc. to apply (if you're not sure this is for you, it might be just ask!).
                        </p>
                        @endif
                        <button type="button" class="btn btn-danger" value="submit"><a href="{{route('getAbout')}}">read More</a></button>
                    </div>
                    <div class="location-info col-md-6">
                        <img src="{{asset('front-assets/images/cookie.jpg')}}" class="img-fluid">
                    </div>
                </div>
            </div>
            </div><!-- #product -->
            @if(isset($cookies) && count($cookies)>0)
            <div id="product" class="product-section main-section w3-animate-fading w3-animate-zoom w3-animate-top">
                <div class="container">
                    <div class="row">
                        <h1 class="text-center title"> <span class="title-em">Our </span>Cookies</h1>
                        <p class="text-center font-italic">We provide you the best cookies in town</p>
                        <div class="service-section ">
                            <div class="tab-content row cf-row" >
                                <div class="owl-carousel owl-theme ser-01">
                                    @foreach($cookies as $cookie)
                                    @foreach($cookie->products as $p)
                                    <div class="item card position-relative">
                                        <img src="{{asset('uploads/product/thumbnail/'.$p->image)}}" class="img-fluid">
                                        <div class="card-info">
                                            <a href="{{route('cookies-blog', $p)}}">
                                                <h2 class="card-title">{{$p->title}}</h2>
                                                <p class="price">$ {{$p->price}}</p>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                                <div class="more text-center">
                                    <a href="{{route('getAllCokies')}}" class="btn more-btn">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- #product -->
                @endif
                @if(isset($cornflakes) && count($cornflakes)>0)
                <div id="other-products" class="other-product main-section w3-animate-fading w3-animate-zoom">
                    <div class="container">
                        <div class="row">
                            <h1 class="text-center title"> <span class="title-em">Our </span>Cornflakes</h1>
                            <p class="text-center font-italic">We provide you the best cornflakes in town</p>
                            <div class="service-section ">
                                <div class="tab-content row cf-row">
                                    <div class="owl-carousel owl-theme ser-02">
                                        @foreach($cornflakes as $cornflake)
                                        @foreach($cornflake->products as $p)
                                        <div class="item card position-relative">
                                            <img src="{{asset('uploads/product/thumbnail/'.$p->image)}}" class="img-fluid">
                                            <div class="card-info">
                                                <a href="{{route('cornflakes-blog', $p)}}">
                                                    <h2 class="card-title">{{$p->title}}</h2>
                                                    <p class="price">$ {{$p->price}}</p>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endforeach
                                    </div>
                                    <div class="more text-center">
                                        <a href="{{route('getAllCornflakes')}}" class="btn more-btn">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div><!-- #product -->
                    @endif
                    @if(isset($special) && !$special == '')
                    <div id="menu" class="special main-section w3-animate-fading w3-animate-zoom">
                        <div class="container">
                            <h1 class="text-center title"><span class="title-em">Today's</span> Special</h1>
                            <p class="text-center font-italic">Daily Menu</p>
                            <div class="our-menu row">
                                @foreach($special->products as $product)
                                <div class="col-md-6 menu-list clearfix">
                                    <div class="item-wrap float-left">
                                        <p>{{$product->title}}</p>
                                    </div>
                                    <div class="price float-right">
                                        <p>$ {{$product->price}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        </div><!-- #menu -->
                        @endif
                        <div id="message" class="message-section main-section w3-animate-fading w3-animate-zoom">
                            <div class="container">
                                <h1 class=" title"><span class="title-em">Message</span> From MD </h1>
                                <!-- <p class="text-center font-italic">Message to colleagues</p> -->
                                <div class="row">
                                    @if(!SITE_MESSAGE_FROM_MD == '')
                                    <div class="col-md-6 message">
                                        @if(!SITE_MD_PROFILE == '') <img src="{{asset('uploads/site/thumbnail/'.SITE_MD_PROFILE)}}" > @else<img src="{{asset('front-assets/images/md.jpg')}}" > @endif
                                        <article>
                                            {!!SITE_MESSAGE_FROM_MD!!}
                                        </article>
                                    </div>
                                    @else
                                    <div class="col-md-6 message">
                                        <img src="{{asset('front-assets/images/md.jpg')}}" >
                                        <article>
                                            <p>Dear colleagues, <br> <br>
                                                The COVID-19 situation has evolved further and we are dealing with a significant global challenge.
                                                The World Health Organization has declared this outbreak a pandemic. Many governments around the world have taken stricter and more impactful measures to ensure the safety of their citizens.
                                                In addition to the immediate and grave health concerns, we are seeing a much wider impact on all of our lives as well as the global economy.
                                            Understandably, there is a great sense of unease everywhere.</p>
                                        </article>
                                    </div>
                                    @endif
                                    <div class="col-md-6 faq-form">
                                        <form action="{{route('sentMail', 0)}}" method="post">
                                            @csrf
                                            <div class="row">
                                                
                                                <div class="col-100 mb-3">
                                                    <input type="text" id="fname" name="first_name" placeholder="Your name.." required="required" value="{{old('first_name')}}">
                                                    <input type="text" id="lname" name="last_name" placeholder="Your last name.." required="required" value="{{old('last_name')}}">
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <input type="email" name="email" placeholder="Your Email" required="required" value="{{old('email')}}">
                                            </div>
                                            
                                            <div class="row">
                                                
                                                <div class="col-100 textarea">
                                                    <textarea rows="4" cols="70" name="message" id="address" placeholder="Your message.."></textarea>
                                                </div>
                                            </div>
                                            <div class="row submit-btn">
                                                <input type="submit" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div><!-- #message -->
                            </div><!--- .wrapper -->
                        </div>
                        
                        @endsection
                        @if(!$metaInfo == '')
                         @section('meta_keywords', $metaInfo->meta_keywords)
                         @section('meta_description', $metaInfo->meta_tag)
                         @section('title', $metaInfo->title_tag)
                        @endif