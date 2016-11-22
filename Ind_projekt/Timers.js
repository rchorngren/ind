//Timer
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date()); //Date.parse is a native command to convert the date in deadline to milliseconds. Total number of milliseconds goes into t
    var seconds = Math.floor((t / 1000) % 60); //Converts the number of milliseconds into seconds and then uses modus to only display the restvalue (in this case the seconds remaining once everything has been divided by 60, hence only the last 60c(59) seconds are displayed)
    var minutes = Math.floor((t / 1000 / 60) % 60); //First converts the milliseconds to seconds and then again to minutes. Shows the last 60 minutes in order to avoid showing all minutes remaining
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24); //Converts milliseconds to seconds, then to minutes and finally to hours
    var days = Math.floor(t / (1000 * 60 * 60 * 24)); //Converts milliseconds to seconds, then to minutes, then straight into number of days remaining
    return {
        "total": t,
        "days": days,
        "hours": hours,
        "minutes": minutes, //Minutes and seconds are not used, but I still want them, just in case :)
        "seconds": seconds
    };
}
//End of Timer


//GraduationTimer
var deadline = "2018-05-31"; //Insert date for when graduating

function initializeGradClock(id, endtime) {
    var clock = document.getElementById(id);
    var timeinterval = setInterval(function () {
        var t = getTimeRemaining(endtime);
        clock.innerHTML = "Tid till examination - " + t.days + " dagar och " + t.hours + " timmar";
        if (t.total <= 0) { //If the time remaining reaches zero, the timer will stop
            clearInterval(timeinterval);
        }
    }, 1000);
}
initializeGradClock("gradCountdown", deadline);
//End of GraduationTimer


//LIA-Timer
var liaDeadline = "2018-01-15"; //Insert date for when LIA starts

function initializeLiaClock(id, endtime) {
    var clock = document.getElementById(id);
    var timeinterval = setInterval(function () {
        var t = getTimeRemaining(endtime);
        clock.innerHTML = "Tid till LIA - " + t.days + " dagar och " + t.hours + " timmar";
        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }, 1000);
}
initializeLiaClock("liaCountdown", liaDeadline);
//End of LIA-timer