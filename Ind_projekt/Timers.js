var gradYear = new Date(); 
gradYear = new Date(gradYear.getFullYear() + 1, 1 - 1, 1); 
$('#gradCountdown').countdown({ until: gradYear });

 
$('#removeGradCountdown').click(function() { 
    var destroy = $(this).text() === 'Remove'; 
    $(this).text(destroy ? 'Re-attach' : 'Remove'); 
    $('#gradCountdown').countdown(destroy ? 'destroy' : { until: gradYear });
});

var liaYear = new Date();
liaYear = new Date(liaYear.getFullYear() + 1, 1 - 1, 1);
$('#liaCountdown').countdown({ until: liaYear });

$('#removeLiaCountdown').click(function () {
    var destroy = $(this).text() === 'Remove';
    $(this).text(destroy ? 'Re-attach' : 'Remove');
    $('#liaCountdown').countdown(destroy ? 'destroy' : { until: liaYear });
});