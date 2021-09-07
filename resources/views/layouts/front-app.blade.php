<!--
=========================================================
Light Bootstrap Dashboard - v2.0.1
=========================================================
Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
Copyright 2019 Creative Tim (https://www.creative-tim.com) & Updivision (https://www.updivision.com)
Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)
Coded by Creative Tim & Updivision
=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/mobile.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>@if(isset($title)) {{$title}} @else Cookie @endif</title>
    <link rel="icon"  type = "image/x-icon" href="{{asset('front-assets/images/logo.png')}}">
  </head>
  <body>
    <header id="masthead" class="site-header" role="banner">
      <div class="container-fluid less-container">
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark ">
          
          <div class="clearfix nav-wrapper">
            <div class="float-left main-logo">
              <a class="navbar-brand logo" href="index.htm"><img src="{{asset('front-assets/images/logo.png')}}" class="img-fluid" height="150px" width="150px"></a>
            </div>
            <div class="float-right main-nav">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse top-main-nav primary-nav" id="main_nav">
                <ul class="navbar-nav ms-auto main-nav">
                  <li class="nav-item"><a class="nav-link active" href="index.htm"> Home </a></li>
                  <li class="nav-item"><a class="nav-link" href="about.html"> About </a></li>
                  <li class="nav-item dropdown drop-nav">
                    <a class="nav-link" href="#" >Product <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-product">
                      <li><a href="#"> Cookies</a>
                      <ul class="dropdown-more">
                        <li><a href="dcookies.html">Dawn Cookies</a></li>
                        <li><a href="rcookies.html">Ribbon Cookies</a></li>
                      </ul>
                    </li>
                    <li><a href="cornflake.html"> Cornflakes</a></li>
                  </ul>
                </li>
                <!-- <li class="nav-item"><a class="nav-link" href="blog.html"> Product </a></li> -->
                <li class="nav-item"><a class="nav-link" href="contact.html"> Contact </a></li>
            </ul>
            </div> <!-- navbar-collapse.// -->
          </div>
        </div>
        
      </nav>
    </div>
    
    </header> <!-- #header -->
    
    @yield('content')
    <footer id="colophon" class="footer" style="background-image: url('front-assets/images/footerbg.jpg');">
      
      <div class="row footer-wrapper">
        <div class="col-md-4 foot-content">
          <a href="#"><img src="{{asset('front-assets/images/logo.png')}}"  width="150px"></a>
          <p>Starting with a simple outline is the best way to begin telling your small business story. You want to introduce your company name and explain what your business does, where you operate.</p>
        </div>
        <div class="col-md-2 foot-content">
          <h4 class="f-title">Contact</h4>
          <ul>
            <li><a class="c-footer">Madhyapur Thimi-9,Bhaktapur</a></li>
            <li><a class="c-footer">9801192470</a></li>
            <li class="f-mail"><a class="c-footer">imperialbaking@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-md-2 foot-content">
          <h4 class="f-title">Links</h4>
          <ul>
            <li><a href="about.html"> about us</a></li>
            <li><a href="contact.html"> our location</a></li>
            <li><a href="blog.html"> product</a></li>
            <!-- <li><a href="#"> shop</a></li> -->
          </ul>
        </div>
        <!-- <div class="col-md">
          <h4 class="f-title">Follow Us</h4>
          <ul>
            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div> -->
        <div class="col-md-4 p-0 ">
          <h4 class="f-title">Location</h4>
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1766.4311719073419!2d85.39301066264574!3d27.690649154895155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1b9f206fe0e1%3A0x92fdcbcd75581fa5!2sMadhyapur%20Thimi%20Municipality%20Ward%20No.9%20Office!5e0!3m2!1sen!2snp!4v1628833276522!5m2!1sen!2snp" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
        </div>
      </div>
      
    </footer>
  </body>
  <!--   Core JS Files   -->
  <script src="{{ asset('light-bootstrap/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="{{asset('front-assets/js/hamburger1.js')}}"></script>
  <script type="text/javascript" src="{{asset('front-assets/js/script.js')}}"></script>
  @yield('scripts')
</html>