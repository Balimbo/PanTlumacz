$(document).ready(function () {
	$(".slider").slick({
  		infinite: true,
  		speed: 1000,
  		slidesToShow: 1,
  		adaptiveHeight: true,
  		autoplay:true,
  		autoplaySpeed:5000,
  		draggable:false,
	});


});

$(function(){

       let s = $(".reviews_text"), arr = [];
       s.each(function(indx){
           arr[indx] = $(this).height();
           if(arr[indx]>200)
           {
           		$(this).toggleClass("higher",true);
           		$(this).after("<button id='more_btn'>see more</button");
           		callFunc(this);
           }
   });
       
});

function callFunc(arg) {
	$("#more_btn").click(function(event) {
           			event.preventDefault();
           				$(arg).toggleClass("higher");
           		});
}
