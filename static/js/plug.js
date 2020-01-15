

$(function () {

    $('#login').click(function (e) {
        $(".right-side .form-holder").show();

        $(".left-side .form-holder").animate({ opacity: 0.0,"left": "+=96%"},1000);
         $(".right-side .form-holder").animate({ opacity: 1.0,"left": "+=96%"},1000)
    });
    $('#signup').click(function (e) {
        $(".left-side .form-holder").animate({opacity: 1.0,"left": "-=96%"},1000);
        $(".right-side .form-holder").animate({opacity: 0.0,"left": "-=96%"},1000);
        $(".right-side .form-holder").hide(2000);

        // e.preventDefault();
    });


});
// function myMove() {
//     var elem = $(".left-side .form-holder");
//     var pos = 0;
//     var id = setInterval(frame, 10);
//     function frame() {
//         if (pos == 1000) {
//             clearInterval(id);
//         } else {
//             pos++;
//             elem.style.left = pos + 'px';
//         }
//     }
// }