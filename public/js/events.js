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
    //if(!$.isEmptyObject(eventsByCluster)){
        //return;
    //}
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
            $('.circle-cluster').toggleClass('expand');
            $('.circle-cluster').click(function(event) {
                $('.circle-cluster').toggleClass('shrink');
                window.setTimeout( function () {
                    var eventName = event.target.id;
                    var events = eventsByCluster[eventName];
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
                    $('.circle-events').toggleClass('expand');
                    $('.circle-events').click(function(clickEvent) {
                        $('.circle-events').toggleClass('shrink');
                        window.setTimeout(function () {
                            if(clickEvent.target.id == "Back") {
                                getClusters();
                                return;
                            }
                            var route2 = SITE_BASE_URL + '/events/geteventbyname';
                            console.log("This is inside the event function");
                            var method2 = 'POST';
                            var request2 = $.ajax({
                                url: route2,
                                type: method2,
                                data: {
                                    'event_name' : clickEvent.target.id
                                } 
                            });
                            console.log(request2);
                            request2.done(function (data2) {
                                console.log(data2);
                                location.href = SITE_BASE_URL + "/events/" + data2.message.event_id;
                            });
                        },500);
                    });
                }, 500);
            });
        } else {
            console.log(data.message);
        }
    });
    return;
}

        $('.circle-cluster').click(function (event) {
            $('.main-clusters-container').html('');
            console.log(event.target);
            var source = $('#events-template').html();
            var template = Handlebars.compile(source);
            var html = template(data);
            $('.main-clusters-container').append(html);
            $('.circle-events').toggleClass('expand');
            $('.circle-events').click(function() {
                $('.circle-events').toggleClass('shrink');
            });
    return;
});
