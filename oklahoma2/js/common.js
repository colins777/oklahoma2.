$(document).ready(function () {


    $('body').on('click', '[href*="#anchor"]', function(e){
        let fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

	let sandwich = function() {
		$(document).on('click', '.mobile-btn-wrap', function () {
			$('.sandwich').toggleClass('sandwich--active');

			$('.top-mobile-menu').toggle("fast");

		});
	};




    $("a[href='#callback']").magnificPopup({
        mainClass: 'my-mfp-zoom-in',
        removalDelay: 300,
        type: 'inline'
    });

    let cottageSlider = function () {
        $('.cottage-slider').slick({
            dots: true,
            autoplay: false,
            infinite: true,
            speed: 1000,
            fade: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dotsClass: "my-dots",
            prevArrow: '<div class="prev-arrow">Prev</div>',
            nextArrow: '<div class="next-arrow">Next</div>'
        });
    };

    sandwich();
    cottageSlider();


	/*Popup*/

});

