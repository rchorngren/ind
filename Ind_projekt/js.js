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

//Keypress stuff
