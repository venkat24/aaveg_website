$(document).ready(function () {
      getClusters();
});

colors = [
    "#FF6384",
    "#22CECE",
    "#FF6384",
    "#22CECE",
    "#36A2EB",
    "#7E5CD4",
    "#36A2EB",
    "#7E5CD4",
    "#FF6384",
    "#22CECE",
    "#FF6384",
    "#22CECE",
    "#36A2EB",
    "#7E5CD4",
    "#36A2EB",
    "#7E5CD4",
    ];

eventsByCluster = {};

function getClusters () {
    if(!$.isEmptyObject(eventsByCluster)){
        $('.main-clusters-container').html('');
        clusterSet({message:eventsByCluster});
    } else {
        var route = SITE_BASE_URL + '/events/getclusterevents';
        var method = 'POST';
        var request = $.ajax({
            url: route,
            method: method
        });

        request.done(function(data){
            $('.main-clusters-container').html('');
            if(data.status_code == 200) {
                eventsByCluster = data.message;
                clusterSet(data);
            } else {
                console.log("Fetch Failed!");
            }
        });
    }
    return;
}

function select(id) {
    document.getElementById(id).className += " select";
}

function clusterSet(data) {
    var clusters = [];
    var newElem = {};
    for (var i=0; i < Object.keys(data.message).length; i++) {
        newElem = {
            cluster_name: Object.keys(data.message)[i],
            color: colors[i]
        };
        clusters.push(newElem);
    }
    data.clusters=clusters;
    var source = $('#clusters-template').html();
    var template = Handlebars.compile(source);
    var html = template(data);
    $('.main-clusters-container').append(html);

    $('.circle-cluster').toggleClass('shrink');
    setTimeout(function() {
        $('.circle-cluster').removeClass('shrink');
        $('.circle-cluster').removeClass('select');
        $('.circle-cluster').toggleClass('expand');
    }, 17);

    $('.circle-cluster').click(function(event) {
        $(".circle-cluster").removeClass("expand");
        $('.circle-cluster').toggleClass('shrink');

        window.setTimeout( function () {
            var eventName = event.target.id;
            var events = data.message[eventName];
            var events_listing = [];
            for (var i = 0; i < events.length; i++) {
                events_listing[i] = {};
                events_listing[i].event_name = events[i];
                events_listing[i].color = colors[i];
            }
            events_listing.push({
                "event_name" : "Back",
                "color" : "#888888",
            });
            var events_container = {
                events: events_listing
            };
            $('.main-clusters-container').html('');
            var source2 = $('#events-template').html();
            var template2 = Handlebars.compile(source2);
            var html2 = template2(events_container);
            $('.main-clusters-container').append(html2);

            $('.circle-events').toggleClass('shrink');
            setTimeout(function() {
                $('.circle-events').removeClass('shrink');
                $('.circle-events').removeClass('select');
                $('.circle-events').toggleClass('expand');
            }, 17);

            $('.circle-events').click(function(clickEvent) {
                $(".circle-events").removeClass("expand");
                $('.circle-events').toggleClass('shrink');

                window.setTimeout(function () {
                    if(clickEvent.target.id == "Back") {
                        getClusters();
                        return;
                    }
                    var route2 = SITE_BASE_URL + '/events/geteventbyname';
                    var method2 = 'POST';
                    var request2 = $.ajax({
                        url: route2,
                        type: method2,
                        data: {
                            'event_name' : clickEvent.target.id
                        } 
                    });
                    request2.done(function (data2) {
                        location.href = SITE_BASE_URL + "/events/" + data2.message.event_id;
                    });
                },350);
            });
        }, 350);
    });
}
