$(function () {

    $('#login').click(function (e) {
        $(".right-side .form-holder").show();
        $(".left-side .form-holder").animate({opacity: 0.0, "left": "+=96%"}, 1000);
        $(".right-side .form-holder").animate({opacity: 1.0, "left": "+=96%"}, 1000)
    });
    $('#signup').click(function (e) {
        $(".left-side .form-holder").animate({opacity: 1.0, "left": "-=96%"}, 1000);
        $(".right-side .form-holder").animate({opacity: 0.0, "left": "-=96%"}, 1000);
        $(".right-side .form-holder").hide(1000);

        // e.preventDefault();
    });


});
