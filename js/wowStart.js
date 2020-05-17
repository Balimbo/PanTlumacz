$(function () {
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 150, // The number of pixels from the end of the user's screen upon reaching which the animation begins
        mobile: false, // Animate in mobile phones
        live: true // default
    })
    wow.init();
});
