function loadPage(suburl, data, callback, postcallback) {
    $.ajax({
        url: suburl,
        type: "GET",
        data: data,
        success: function(maindta) {
            if (callback) {
                callback(maindta);
            } else {
                document.getElementById("pageDetails").innerHTML = maindta;
                if (postcallback) {
                    postcallback();
                }
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var message = "ERROR:" + errorThrown;
            alert(errorThrown);
        }
    });
}

function toggleDivContent(divID) {
    var x = document.getElementById(divID);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function displayTime() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    var dayofweek = weekday[currentTime.getDay()];

    // Let's set the AM and PM meridiem and
    // 12-hour format
    var meridiem = "AM"; // Default is AM

    // Convert from 24 hour to 12 hour format
    // and keep track of the meridiem.
    if (hours > 12) {
        hours = hours - 12;
        meridiem = "PM";
    }

    // 0 AM and 0 PM should read as 12
    if (hours === 0) {
        hours = 12;
    }

    if (seconds < 10) {
        // Add the "0" digit to the front
        // so 9 becomes "09"
        seconds = "0" + seconds;
    }

    if (hours < 10) {
        // Add the "0" digit to the front
        // so 9 becomes "09"
        hours = "0" + hours;
    }

    if (minutes < 10) {
        // Add the "0" digit to the front
        // so 9 becomes "09"
        minutes = "0" + minutes;
    }

    // This gets a "handle" to the clock div in our HTML
    var clockDiv = document.getElementById("clock");
    var dayDiv = document.getElementById("day");

    // Then we set the text inside the clock div
    // to the hours, minutes, and seconds of the current time
    clockDiv.innerText = hours + ":" + minutes + ":" + seconds + " " + meridiem;
    dayDiv.innerText = dayofweek;
}

function changeColor(color, color2) {
    document.body.style.background = color;
    document.body.style.color = color2;
}

function loadModal() {
    await (3000);
    document.getElementById("id01").click();
}