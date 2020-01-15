$(function () {

    $('#login').click(function (e) {
        $(".left-side .form-holder").fadeOut(1000);
        $(".right-side .form-holder").fadeIn(1000);
        e.preventDefault();
    });
    $('#signup').click(function (e) {
        $(".right-side .form-holder").fadeOut(1000);
        $(".left-side .form-holder").fadeIn(1000);
        e.preventDefault();
    });


});
