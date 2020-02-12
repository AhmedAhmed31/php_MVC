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
$(document).ready(function() {
    $('#LOGIN').submit(function (e) {
        e.preventDefault();
        var username = $('#email').val();
        var password = $('#password').val();

        if ($.trim(username).length > 0 && $.trim(password).length > 0) {
            fetch("/login", {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify({username: username, password: password})
            })
                .then(res => res.json() )
                .then(data => console.log(data))
                .catch(err => console.log(err))

        } else {

            $('#error').html("<span class='text-danger'>Please fill all fields</span>");
        }
    });
});