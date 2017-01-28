//Facebook Like-button
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//End of Facebook Like-button

$(document).ready(function () {
    $(".job").on("click", function () {
        $(this).next(".details").slideToggle();
    });
});

//Keypress - to access easter egg
$(document).keypress((function (e) {
    var pass = "idkfa";    var typed = "";
    return function (e) {
        typed += String.fromCharCode(e.which);
        console.log(typed);        if (typed === pass) {
            $('.secret').show();
        }
    };
})());
//End of Keypress
$(document).keypress((function (e) {
    var pass = "admin";    var typed = "";
    return function (e) {
        typed += String.fromCharCode(e.which);
        console.log(typed);        if (typed === pass) {
            $('.admin').show();
        }
    };
})());