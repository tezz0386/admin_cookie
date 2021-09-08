<footer id="colophon" class="footer" style="background-image: {{asset('assets/images/footerbg.jpg')}}; ">
	
	<div class="row footer-wrapper">
		<div class="col-md-4 foot-content">
			<a href="#">
				<img @if(!SITE_LOGO == '') src="{{asset('upload/site/thumbnail/'.SITE_LOGO)}}" @else src="assets/images/logo.png" @endif  width="150px">
			</a>
			@if(!SITE_QUOATION == '')
			<p>{{SITE_QUOATION}}</p>
			@else
			<p>Starting with a simple outline is the best way to begin telling your small business story. You want to introduce your company name and explain what your business does, where you operate.</p>
			@endif
		</div>
		<div class="col-md-2 foot-content">
			<h4 class="f-title">Contact</h4>
			<ul>
				<li><a class="c-footer">
					@if(! SITE_ADDRESS == '') {{SITE_ADDRESS}} @else Madhyapur Thimi-9,Bhaktapur @endif
				</a></li>
				<li><a class="c-footer">
					@if(! SITE_CONTACT == '') {{SITE_CONTACT}} @else 9801192470 @endif
				</a></li>
				<li class="f-mail"><a class="c-footer">@if(! SITE_EMAIL == '') {{SITE_EMAIL}} @else imperialbaking@gmail.com @endif</a></li>
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