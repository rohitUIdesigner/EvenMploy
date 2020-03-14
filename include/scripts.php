<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<script src="js/moment.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/swiper.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="js/bootstrap-multiselect.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script src="js/wow.js"></script>
<script type="text/javascript">  	
		var swiper = new Swiper('.swiper_main', {
		autoplay:{
			delay:5000,
			disableOnInteraction: false
		},
		loop: true,
		preventClicks: false,
	  	navigation: {
	    	nextEl: '.swiper-button-next',
	    	prevEl: '.swiper-button-prev',
	  		},
	  		breakpoints: {
	        640: {
	          slidesPerView: 1,
	          // spaceBetween: 20,
	        },
	        768: {
	          slidesPerView: 1,
	          // spaceBetween: 40,
	        },
	        1080: {
	          slidesPerView: 1,
	          // spaceBetween: 50,
	        },
    	}
	});
</script>

<!-- <script type="text/javascript">  	
	var swiper = new Swiper('.swiper-main', {
		// autoplay:{
		// 	delay:5000,
		// 	disableOnInteraction: false
		// },
		fadeEffect: { crossFade: true },
		centeredSlides: true,
		loop: true,
		// disableOnInteraction: false,
		preventClicks: false,
	  	navigation: {
	    	nextEl: '.swiper-button-next',
	    	prevEl: '.swiper-button-prev',
	  		},
		});
</script> -->

<!-- toggle sidebar -->
<script>
	$(".cross").hide();
	$(document).ready(function(){
		$(".right").click(function(){
			$(this).closest('.wrapper').find(".sidebar").toggleClass('action');
			$(".right").hide();
			$(".cross").show();		
		});
		$(".cross").click(function(){
			$(this).closest('.wrapper').find(".sidebar").toggleClass('action');
			$(".right").show();
			$(".cross").hide();		
		});
	});
</script>
<!-- End -->

<script>
	wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
</script>

<script type="text/javascript">
$(document).ready(function() {
	    $('.niceselc').select2();
	    $('.dtpckr').datepicker();
	});
</script>
<script type="text/javascript">
	var homeSwiper = new Swiper('.home-swiper-container', {
	  effect: 'fade',
	  autoplay: 2500,
	  autoplayDisableOnInteraction: false,
	  slidesPerView: 1
	});
</script>

<!-- multiselector -->

<script type="text/javascript">
    $(document).ready(function() {
        $('.choose-amenity').multiselect({
            includeSelectAllOption: true
        });
    });
</script>

<!-- End -->

<!-- faq -->

<script>
    (function($) {
      $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

      $('.accordion a').click(function(j) {
          var dropDown = $(this).closest('li').find('p');

          $(this).closest('.accordion').find('p').not(dropDown).slideUp();

          if ($(this).hasClass('active')) {
              $(this).removeClass('active');
          } else {
              $(this).closest('.accordion').find('a.active').removeClass('active');
              $(this).addClass('active');
          }

          dropDown.stop(false, true).slideToggle();

          j.preventDefault();
      });
    })(jQuery);
</script>

<script>
	$('.rating-body').hide();
	$(document).ready(function(){
		$('.rat_click').click(function(){
			$('.rating-body').slideToggle();
		});
	});
</script>
<!-- End -->
