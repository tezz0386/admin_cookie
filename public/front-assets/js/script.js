  $('.slider-main').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    speed:10,

    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

      $('.ser-01').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
   autoplay:true,
   autoplayHoverPause:true,
    autoplayTimeout:3000,
    lazyload: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

       $('.ser-02').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayHoverPause:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

        $('.ser-03').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

         $('.ser-04').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

         $('.ver-01').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

         $('.ver-02').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

         $('.ver-03').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

         $('.ver-04').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

         $('.more-info-sl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

         $('.testminoals-slide').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

         $('.news').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})



document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 





$(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() >400){
            $('.about-section').addClass('change');
        }
        else {
            $('.about-section').removeClass('change');
        }
    });
});

$(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() >400){
            $('.other-product').addClass('change-op');
        }
        else {
            $('.other-product').removeClass('change-op');
        }
    });
});
$(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() >400){
            $('.product-section').addClass('change-p');
        }
        else {
            $('.product-section').removeClass('change-p');
        }
    });
});

$(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() >400){
            $('.special').addClass('change-s');
        }
        else {
            $('.special').removeClass('change-s');
        }
    });
});
$(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() >400){
            $('.message-section').addClass('change-m');
        }
        else {
            $('.message-section').removeClass('change-m');
        }
    });
});

