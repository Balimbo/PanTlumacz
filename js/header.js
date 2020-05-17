$(function () {
    //Scroll to the specified elements
    let lastCall = 0;
    $("[data-scroll]").click(function (event) {
        event.preventDefault();
        let blockId = $(this).data("scroll");
        let blockOffset = $(blockId).offset().top;

        $("html, body").animate({
            scrollTop: blockOffset - 30
        }, 600)
    })

    //When you click on the adaptive menu button,
    // it drops out and the button changes to a cross to close the menu
    let temp = $("#nav_toggle").click(function (event) {
        if (Date.now() - lastCall > 500) {
            event.preventDefault();

            $("#nav,#nav_toggle").toggleClass("active");
            $(".header_nav").slideToggle("slow");
            lastCall = Date.now();
        }
    });
    //When changing the width of the screen,
    // the appearance of an adaptive menu for smartphones
    window.onresize = function (event) {
        if (document.body.clientWidth >= 930)
            $("#nav").css({
                "display": "flex"
            });
        else if ($("#nav_toggle").hasClass("active"))
            $("#nav").css({
                "display": "block"
            });
        else if (!$("#nav_toggle").hasClass("active"))
            $("#nav").css({
                "display": "none"
            });
    };

});
