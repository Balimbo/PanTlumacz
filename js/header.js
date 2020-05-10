$(function () {
	$("[data-scroll]").click(function (event) {
		event.preventDefault();
		let blockId=$(this).data("scroll");
		let blockOffset = $(blockId).offset().top;

		$("html, body").animate({scrollTop:blockOffset-30},600)

		console.log(blockOffset);
	})




	var temp = $("#nav_toggle").click(function (event) {
		event.preventDefault();

		$("#nav,#nav_toggle").toggleClass("active");
		$(".header_nav").slideToggle("slow");
		console.log(temp);
	});
});