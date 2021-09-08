@extends('layouts.front-app')
@section('content')
<div id="content" class="site-content">
  <div class="wrapper">
    <div class="container">
      <div class="row c-row">
        <h1 class="text-center cu">Contact <span>Us</span> </h1>
        <div class="col-md-6 address">
          <div class="contact-f">
            <div class="container">
              <form action="{{route('sentMail', 1)}}" method="post">
                @csrf
                <div class="row">
                  <h1>Send us your feedback</h1>
                  <div class="col-100 mb-3">
                    <input type="text" id="fname" name="first_name" placeholder="Your name.." required="required" value="{{old('first_name')}}">
                    <input type="text" id="lname" name="last_name" placeholder="Your last name.." required="required" value="{{old('last_name')}}"> <br>
                    <input type="email" id="lname" class="form-mail" name="email" placeholder="Your email.." required="required" value="{{old('email')}}">
                  </div>
                </div>
                
                
                <div class="row">
                  
                  <div class="col-100 textarea">
                    <textarea rows="4" cols="70" name="message" id="address" placeholder="Your message.." required="required">{{old('message')}}</textarea>
                  </div>
                </div>
                
                <button type="button" class="btn btn-danger" value="submit">Submit</button>
                
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 c-map">
          @if(!SITE_LOCATION == '')
          {!!SITE_LOCATION!!}
          @else
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1766.4311719073419!2d85.39301066264574!3d27.690649154895155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1b9f206fe0e1%3A0x92fdcbcd75581fa5!2sMadhyapur%20Thimi%20Municipality%20Ward%20No.9%20Office!5e0!3m2!1sen!2snp!4v1628833276522!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          @endif
        </div>
      </div>
      <div class="contact-loacation clearfix">
        <article class="float-left article">
          
          <p>@if(!SITE_ADDRESS == ''){{SITE_ADDRESS}} @else Madhyapur Thimi-9,Bhaktapur @endif</p>
          <p>@if(! SITE_CONTACT == '') {{SITE_CONTACT}} @endif</p>
          <p>@if(!SITE_EMAIL=='') {{SITE_EMAIL}} @endif</p>
        </article>
        <ul class="float-right social-links">
          <li><a href="{{SITE_FACEBOOK}}"><i class="fab fa-facebook-f"></i>Facebook/Dawncookies</a></li>
        </ul>
      </div>
      </div> <!-- .container -->
      
      
      </div><!--- .wrapper -->
    </div>
    @endsection
    @section('title', $metaInfo->title_tag)
    @section('meta_keywords', $metaInfo->meta_keywords)
    @section('meta_description', $metaInfo->meta_description)
