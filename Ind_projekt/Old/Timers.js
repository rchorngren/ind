//var gradYear = new Date(); 
//gradYear = new Date(gradYear.getFullYear() + 1, 1 - 1, 1); 
//$('#gradCountdown').countdown({ until: gradYear });

 
//$('#removeGradCountdown').click(function() { 
//    var destroy = $(this).text() === 'Remove'; 
//    $(this).text(destroy ? 'Re-attach' : 'Remove'); 
//    $('#gradCountdown').countdown(destroy ? 'destroy' : { until: gradYear });
//});

//var liaYear = new Date();
//liaYear = new Date(liaYear.getFullYear() + 1, 1 - 1, 1);
//$('#liaCountdown').countdown({ until: liaYear });

//$('#removeLiaCountdown').click(function () {
//    var destroy = $(this).text() === 'Remove';
//    $(this).text(destroy ? 'Re-attach' : 'Remove');
//    $('#liaCountdown').countdown(destroy ? 'destroy' : { until: liaYear });
//});

$(function () {

    var note = $('#gradCountdown'),
        ts = new Date(2016, 4, 30),
        newYear = true;

    if ((new Date()) > ts) {
        // The new year is here! Count towards something else.
        // Notice the *1000 at the end - time must be in milliseconds
        ts = (new Date()).getTime() + 10 * 24 * 60 * 60 * 1000;
        newYear = false;
    }

    $('#countdown').countdown({
        timestamp: ts,
        callback: function (days, hours, minutes, seconds) {

            var message = "";

            message += days + " day" + (days == 1 ? '' : 's') + ", ";
            message += hours + " hour" + (hours == 1 ? '' : 's') + ", ";
            message += minutes + " minute" + (minutes == 1 ? '' : 's') + " and ";
            message += seconds + " second" + (seconds == 1 ? '' : 's') + " <br />";

            if (newYear) {
                message += "left until the new year!";
            }
            else {
                message += "left to 10 days from now!";
            }

            note.html(message);
        }
    });

});