---
---
function initialiseMap(mapContainerId) {
    L.mapbox.accessToken = '{{site.mapbox_api_key}}';
    var map = L.mapbox.map(mapContainerId, 'mapbox.pencil', {}).setView([53.479144, -2.244161], 12);
    //var map = L.mapbox.map(mapContainerId, 'mapbox.light', {}).setView([53.479144, -2.244161], 12);
    var rootUrl = window.location.protocol + '//' + window.location.host + '/';
    getAllTours().then(function (tours) {
        var geoJSON = {'type': 'FeatureCollection', 'features': []}
        for (var tourIndex = 0; tourIndex < tours.length; tourIndex++) {
            var tour = tours[tourIndex];
            geoJSON.features.push(
                {
                    'type': 'Feature',
                    'properties': {
                        'title': tour.title.rendered,
                        'description': tour.content.rendered + '<br><a href="' + rootUrl + 'tour-details.html?tour=' + tour.slug + '">Read more</a>'
                    },
                    "geometry": {
                        "coordinates": [Number(tour.longitude), Number(tour.latitude)],
                        "type": "Point"
                    }
                });
        }
        L.mapbox.featureLayer(geoJSON).addTo(map);
    });
}
