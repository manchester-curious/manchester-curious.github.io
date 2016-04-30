---
initial_zoom: 12
---
function initialiseMap(mapContainerId) {
    L.mapbox.accessToken = '{{site.mapbox_api_key}}';
    var map = L.mapbox.map(mapContainerId, 'mapbox.light', {}).setView([53.479144, -2.244161], {{page.initial_zoom}});
    L.control.locate().setPosition('bottomleft').addTo(map);
    var rootUrl = window.location.protocol + '//' + window.location.host + '/';
    getAllTours().then(function (tours) {
        var geoJSON = {'type': 'FeatureCollection', 'features': []}
        for (var tourIndex = 0; tourIndex < tours.length; tourIndex++) {
            var tour = tours[tourIndex];
            var tourIcon = '../images/icon-tour-walking-map.png';
            if (tour.event_type === 'Building Tour') {
                tourIcon = '../images/icon-tour-building-map.png';
            }
            geoJSON.features.push(
                {
                    'type': 'Feature',
                    'properties': {
                        'icon': { // see https://www.mapbox.com/mapbox.js/api/v2.4.0/l-icon/
                            'iconUrl': tourIcon,
                            'iconSize': [30, 30],
                            "popupAnchor": [0, -15]
                        },
                        'title': tour.title.rendered,
                        'description': tour.content.rendered + '<br><a href="' + rootUrl + 'tour-details.html?tour=' + tour.slug + '">Read more</a>'
                    },
                    'geometry': {
                        'coordinates': [Number(tour.longitude), Number(tour.latitude)],
                        'type': 'Point'
                    }
                });
        }
        var featureLayer = L.mapbox.featureLayer().addTo(map);

        featureLayer.on('layeradd', function(e) {
            var marker = e.layer,
                feature = marker.feature;

            marker.setIcon(L.icon(feature.properties.icon));
        });
        featureLayer.setGeoJSON(geoJSON);
    });
}
