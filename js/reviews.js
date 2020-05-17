$(document).ready(function () {
    $(".slider").slick({
        infinite: true, 		//infinite slide
        speed: 1000, 			//slide change speed
        slidesToShow: 1, 		//number of slides on the screen
        adaptiveHeight: true, 	//adaptive height to slides
        autoplay: true, 		//autoplay to slides
        autoplaySpeed: 5000,
        draggable: false, 		//draggable only for phones
    }); 						//slider


});
