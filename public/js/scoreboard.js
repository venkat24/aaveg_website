var culturals = {
    diamond: 0,
    coral: 0,
    jade: 0,
    agate: 0,
    opal: 0,
};

var misc = {
    diamond: 0,
    coral: 0,
    jade: 0,
    agate: 0,
    opal: 0,
};

var sports = {
    diamond: 0,
    coral: 0,
    jade: 0,
    agate: 0,
    opal: 0,
};
$(document).ready(function () {
    getScoreboard();
});
function setCap(str) {
    $('#caption').html(str);
}
function getScoreboard() {
    var route = SITE_BASE_URL + '/scoreboard/getall';
    var method = 'POST';
    var request = $.ajax({
        url: route,
        method: method,
    });
    request.done(function(data){
        if(data.status_code == 200) {
            setScores(data);
        } else {
            alert('Insertion Failed');
        }
    });
}

function setScores(info) {
    console.log(info.message);
    if(info.message["Culturals"]) {
        for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
            culturals.diamond+=parseInt(Math.trunc(info.message["Culturals"][i]["diamond_score"]));
        for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
            culturals.coral+=parseInt(Math.trunc(info.message["Culturals"][i]["coral_score"]));
        for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
            culturals.jade+=parseInt(Math.trunc(info.message["Culturals"][i]["jade_score"]));
        for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
            culturals.agate+=parseInt(Math.trunc(info.message["Culturals"][i]["agate_score"]));
        for (var i = info.message["Culturals"].length - 1; i >= 0; i--)
            culturals.opal+=parseInt(Math.trunc(info.message["Culturals"][i]["opal_score"]));
    }

    if(info.message["Sports"]) {
        for (var i = info.message["Sports"].length - 1; i >= 0; i--)
            sports.diamond+=parseInt(Math.trunc(info.message["Sports"][i]["diamond_score"]));
        for (var i = info.message["Sports"].length - 1; i >= 0; i--)
            sports.coral+=parseInt(Math.trunc(info.message["Sports"][i]["coral_score"]));
        for (var i = info.message["Sports"].length - 1; i >= 0; i--)
            sports.jade+=parseInt(Math.trunc(info.message["Sports"][i]["jade_score"]));
        for (var i = info.message["Sports"].length - 1; i >= 0; i--)
            sports.agate+=parseInt(Math.trunc(info.message["Sports"][i]["agate_score"]));
    }

    if(info.message["Spectrum"]) {
        for (var i = info.message["Spectrum"].length - 1; i >= 0; i--)
            misc.diamond+=parseInt(Math.trunc(info.message["Spectrum"][i]["diamond_score"]));
        for (var i = info.message["Spectrum"].length - 1; i >= 0; i--)
            misc.coral+=parseInt(Math.trunc(info.message["Spectrum"][i]["coral_score"]));
        for (var i = info.message["Spectrum"].length - 1; i >= 0; i--)
            misc.jade+=parseInt(Math.trunc(info.message["Spectrum"][i]["jade_score"]));
        for (var i = info.message["Spectrum"].length - 1; i >= 0; i--)
            misc.agate+=parseInt(Math.trunc(info.message["Spectrum"][i]["agate_score"]));
        for (var i = info.message["Spectrum"].length - 1; i >= 0; i--)
            misc.opal+=parseInt(Math.trunc(info.message["Spectrum"][i]["opal_score"]));
    }
    if(info.message.Culturals) {
        for (var i = info.message.Culturals.length - 1; i >= 0; i--) {
            info.message.Culturals[i].diamond_score=Math.trunc(info.message.Culturals[i].diamond_score);
            info.message.Culturals[i].agate_score=Math.trunc(info.message.Culturals[i].agate_score);
            info.message.Culturals[i].coral_score=Math.trunc(info.message.Culturals[i].coral_score);
            info.message.Culturals[i].jade_score=Math.trunc(info.message.Culturals[i].jade_score);
            info.message.Culturals[i].opal_score=Math.trunc(info.message.Culturals[i].opal_score);
        }
    }
    if(info.message.Sports) {
        for (var i = info.message.Sports.length - 1; i >= 0; i--) {
            info.message.Sports[i].diamond_score=Math.trunc(info.message.Sports[i].diamond_score);
            info.message.Sports[i].agate_score=Math.trunc(info.message.Sports[i].agate_score);
            info.message.Sports[i].coral_score=Math.trunc(info.message.Sports[i].coral_score);
            info.message.Sports[i].jade_score=Math.trunc(info.message.Sports[i].jade_score);
            info.message.Sports[i].opal_score=Math.trunc(info.message.Sports[i].opal_score);
        }
    }
    if(info.message.Spectrum) {
        for (var i = info.message.Spectrum.length - 1; i >= 0; i--) {
            info.message.Spectrum[i].diamond_score=Math.trunc(info.message.Spectrum[i].diamond_score);
            info.message.Spectrum[i].agate_score=Math.trunc(info.message.Spectrum[i].agate_score);
            info.message.Spectrum[i].coral_score=Math.trunc(info.message.Spectrum[i].coral_score);
            info.message.Spectrum[i].jade_score=Math.trunc(info.message.Spectrum[i].jade_score);
            info.message.Spectrum[i].opal_score=Math.trunc(info.message.Spectrum[i].opal_score);
        }
    }
    info.message["culturals_total"]=culturals;
    info.message["sports_total"]=sports;
    info.message["misc_total"]=misc;
    var source = $('#display').html();
    var template = Handlebars.compile(source);
    var html = template(info);
    $('#main-container').append(html);
    charts(culturals);
    sanitizeScoreboard();
}
function charts(culturals) {
    $('#myChart').remove();
    $('#chart-container').append('<canvas id="myChart" width="400" height="100"></canvas>');
    var canvas = document.getElementById("myChart");
    var context = canvas.getContext('2d');
    context.clearRect(0, 0, canvas.width, canvas.height);
    var myChart = new Chart(canvas, {
        type: 'bar',
        data: {
            labels: ["Diamond", "Coral", "Jade", "Agate", "Opal"],
            datasets: [{
                label: 'Points',
                data: [culturals["diamond"],culturals["coral"],culturals["jade"],culturals["agate"],culturals["opal"]],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1,
                scaleFontColor: "#ff0000",
            }]
        },
        options: {

            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
}
function sanitizeScoreboard() {
    var tds = document.getElementsByTagName('td');
    console.log(tds);
    for(var i = 0; i < tds.length; i++) {
        if(tds[i].innerHTML === '0') {
            tds[i].innerHTML = '-';
        }
    }
}
