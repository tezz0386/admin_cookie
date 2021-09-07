@extends('layouts.front-app')
@section('content')
<div id="content" class="site-content">
    <div class="wrapper">
        <div id="featured-slider" class="main-slider ">
            <div class="owl-carousel owl-theme slider-main">
                @if(isset($banners) && count($banners)>0)
                @foreach($banners as $banner)
                <div class="item main-banner">
                    <img src="{{asset('uploads/banner/thumnail/'.$banner->image)}}" class="img-fluid">
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
                        <p>This hub is for rising entrepreneurs in the "Art"  industry which we define as including but not limited to the following—artisans, fine artists, singers, performers, fitness experts, fashionistas foodies, and creatives. This curriculum has much overlap with the geographic based hubs, but offers a curriculum tailored to the specific needs of the art industry and self promotion in the creative business world. We invite any self-performing artists, artisans, creatives etc. to apply (if you're not sure this is for you, it might be just ask!).
                        </p>
                        <button type="button" class="btn btn-danger" value="submit"><a href="about.html">read More</a></button>
                    </div>
                    <div class="location-info col-md-6">
                        <img src="{{asset('front-assets/images/cookie.jpg')}}" class="img-fluid">
                    </div>
                </div>
            </div>
            </div><!-- #product -->
            <div id="product" class="product-section main-section w3-animate-fading w3-animate-zoom w3-animate-top">
                <div class="container">
                    <div class="row">
                        <h1 class="text-center title"> <span class="title-em">Our </span>Cookies</h1>
                        <p class="text-center font-italic">We provide you the best cookies in town</p>
                        <div class="service-section ">
                            <div class="tab-content row cf-row" >
                                <div class="owl-carousel owl-theme ser-01">
                                    <div class="item card position-relative">
                                        <img src="{{asset('front-assets/images/product-11.jpg')}}" class="img-fluid">
                                        <div class="card-info">
                                            <a href="blog.html">
                                                <h2 class="card-title">Millennium Cookies</h2>
                                                <p class="price">$15</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item card position-relative">
                                        <img src="{{asset('front-assets/images/product-22.jpg')}}" class="img-fluid">
                                        <div class="card-info">
                                            <a href="blog.html">
                                                <h2 class="card-title">Sugar Free Digestive Cookies</h2>
                                                <p class="price">$5</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item card position-relative">
                                        <img src="{{asset('front-assets/images/product-33.jpg')}}" class="img-fluid">
                                        <div class="card-info">
                                            <a href="blog.html">
                                                <h2 class="card-title">Ribbon Salt & Sweet Cookies</h2>
                                                <p class="price">$10</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item card position-relative">
                                        <img src="{{asset('front-assets/images/product-04.jpg')}}" class="img-fluid">
                                        <div class="card-info">
                                            <a href="blog.html">
                                                <h2 class="card-title">Digestive Biscuits</h2>
                                                <p class="price">$25</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item card position-relative">
                                        <img src="{{asset('front-assets/images/product-05.jpg')}}" class="img-fluid">
                                        <div class="card-info">
                                            <a href="blog.html">
                                                <h2 class="card-title">Tiger Biscuits</h2>
                                                <p class="price">$13</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="more text-center">
                                    <a href="cookies.html" class="btn more-btn">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- #product -->
                <div id="other-products" class="other-product main-section w3-animate-fading w3-animate-zoom">
                    <div class="container">
                        <div class="row">
                            <h1 class="text-center title"> <span class="title-em">Our </span>Cornflakes</h1>
                            <p class="text-center font-italic">We provide you the best cornflakes in town</p>
                            <div class="service-section ">
                                <div class="tab-content row cf-row">
                                    <div class="owl-carousel owl-theme ser-02">
                                        <div class="item card position-relative">
                                            <img src="{{asset('front-assets/images/product-01.jpg')}}" class="img-fluid">
                                            <div class="card-info">
                                                <a href="blog.html">
                                                    <h2 class="card-title">Dawn Cornflakes</h2>
                                                    <p class="price">$12</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item card position-relative">
                                            <img src="{{asset('front-assets/images/product-03.jpg')}}" class="img-fluid">
                                            <div class="card-info">
                                                <a href="blog.html">
                                                    <h2 class="card-title">Rolled Oats</h2>
                                                    <p class="price">$22</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item card position-relative">
                                            <img src="{{asset('front-assets/images/product-07.jpg')}}" class="img-fluid">
                                            <div class="card-info">
                                                <a href="blog.html">
                                                    <h2 class="card-title">Cornflakes 25% Extra</h2>
                                                    <p class="price">$5</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item card position-relative">
                                            <img src="{{asset('front-assets/images/product-08.jpg')}}" class="img-fluid">
                                            <div class="card-info">
                                                <a href="blog.html">
                                                    <h2 class="card-title">Instant Oats</h2>
                                                    <p class="price">$2</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item card position-relative">
                                            <img src="{{asset('front-assets/images/product-09.jpg')}}" class="img-fluid">
                                            <div class="card-info">
                                                <a href="blog.html">
                                                    <h2 class="card-title">Cornflakes Jar</h2>
                                                    <p class="price">$5</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more text-center">
                                        <a href="cornflake.html" class="btn more-btn">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div><!-- #product -->
                    <div id="menu" class="special main-section w3-animate-fading w3-animate-zoom">
                        <div class="container">
                            <h1 class="text-center title"><span class="title-em">Today's</span> Special</h1>
                            <p class="text-center font-italic">Daily Menu</p>
                            <div class="our-menu row">
                                <div class="col-md-6 menu-list clearfix">
                                    <div class="item-wrap float-left">
                                        <p>Digestive</p>
                                        <span>(milk, sugar, caramel)</span>
                                    </div>
                                    <div class="price float-right">
                                        <p>$25</p>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-list clearfix">
                                    <div class="item-wrap float-left">
                                        <p>Cornflakes</p>
                                        <span>(milk, sugar, chocolate)</span>
                                    </div>
                                    <div class="price float-right">
                                        <p>$20</p>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-list clearfix">
                                    <div class="item-wrap float-left">
                                        <p>Super Upahar</p>
                                        <span>(milk, sugar, caramel)</span>
                                    </div>
                                    <div class="price float-right">
                                        <p>$5</p>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-list clearfix">
                                    <div class="item-wrap float-left">
                                        <p>Instant Oats</p>
                                        <span>(milk, sugar, caramel)</span>
                                    </div>
                                    <div class="price float-right">
                                        <p>$12</p>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-list clearfix">
                                    <div class="item-wrap float-left">
                                        <p>Choco Crunchy</p>
                                        <span>(milk, sugar, caramel)</span>
                                    </div>
                                    <div class="price float-right">
                                        <p>$35</p>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-list clearfix">
                                    <div class="item-wrap float-left">
                                        <p>T20 Cookies</p>
                                        <span>(milk, sugar, caramel)</span>
                                    </div>
                                    <div class="price float-right">
                                        <p>$15</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div><!-- #menu -->
                        <div id="message" class="message-section main-section w3-animate-fading w3-animate-zoom">
                            <div class="container">
                                <h1 class=" title"><span class="title-em">Message</span> From MD </h1>
                                <!-- <p class="text-center font-italic">Message to colleagues</p> -->
                                <div class="row">
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
                                    <div class="col-md-6 faq-form">
                                        <form action="/action_page.php">
                                            <div class="row">
                                                
                                                <div class="col-100 mb-3">
                                                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                
                                                <div class="col-100 textarea">
                                                    <textarea rows="4" cols="70" name="address" id="address" placeholder="Your message.."></textarea>
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