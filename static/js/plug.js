$(function () {

    $('#login').click(function (e) {
        $(".left-side .form-holder").fadeOut(1000);
        $(".right-side .form-holder").fadeIn(1);
        e.preventDefault();
    });
    $('#signup').click(function (e) {
        $(".right-side .form-holder").fadeOut(1000);
        $(".left-side .form-holder").fadeIn(1000);
        e.preventDefault();
    });


});


function myMove() {
    var elem = document.getElementById("right-side");
    var pos = 0;
    var id = setInterval(frame, 10);
    function frame() {
        if (pos == 350) {
            clearInterval(id);
        } else {
            pos++;
            elem.style.top = pos + 'px';
            elem.style.left = pos + 'px';
        }
    }
}