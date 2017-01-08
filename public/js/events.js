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
        return;
    }
	var route = SITE_BASE_URL + '/events/getclusterevents';
	var method = 'POST';

	var request = $.ajax({
		url: route,
		method: method
	});

	request.done(function(data){
        $('.main-clusters-container').html('');
        console.log(data.message);
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
                    console.log(event.target.innerHTML);
                    var eventName = event.target.innerHTML;
                    var events = eventsByCluster[eventName];
                    console.log(events);
                    $('.main-clusters-container').html('');
                    var source2 = $('#events-template').html();
                    var template2 = Handlebars.compile(source2);
                    var html2 = template(events);
                    $('.main-clusters-container').append(html);
                    $('.circle-events').toggleClass('expand');
                    $('.circle-events').click(function(clickEvent) {
                        //$('.circle-events').toggleClass('shrink');
                        console.log("Clicked on event" + clickEvent.target.innerHTML);
                    });
                    console.log("Function End");
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
