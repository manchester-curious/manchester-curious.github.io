---
---
var BUILDINGS_CACHE_KEY = 'buildings';
var EVENTS_CACHE_KEY = 'events';
var pageCache = {};


function getQueryVariable(variable) {
	var query = window.location.search.substring(1);
	var vars = query.split('&');
	for (var i = 0; i < vars.length; i++) {
		var pair = vars[i].split('=');
		if (decodeURIComponent(pair[0]) == variable) {
			return decodeURIComponent(pair[1]);
		}
	}
	console.error('Query variable %s not found', variable);
}

function getObject(cacheKey, url) {
	
	if (localStorage) {
		var dfd = $.Deferred();
		var object = localStorage.getCacheItem(cacheKey);
		if (object) {
			if (typeof object != 'object') {
				object = JSON.parse(object);
			}
			return $.when(object);
		}
	}

	return $.when($.ajax({
		 url: url,
		 crossDomain: true
	})).then(function(data) {
		if (localStorage) {
			localStorage.setCacheItem(cacheKey, data, {hours: 1});
		}
		return data;
	});
}

function getAllTours() {
	if (!pageCache.tours) {
		pageCache.tours = getObject(BUILDINGS_CACHE_KEY, "http://buildings.manchestercurious.com/wp-json/wp/v2/buildings");
	}

	return pageCache.tours;
}

function compareEvents(a, b) {
	if (a.startdate < b.startdate)
		return -1;
    if (a.startdate > b.startdate)
        return 1;
    if (a.time < b.time)
		return -1;
    if (a.time > b.time)
        return 1;
    return 0;
}

function getAllEvents() {
	if (!pageCache.events) {
		pageCache.events = getObject(EVENTS_CACHE_KEY, "http://buildings.manchestercurious.com/wp-json/wp/v2/events");
		pageCache.events.sort(compareEvents);
	}
	return pageCache.events;
}

function getEvents(buildId) {
	return getAllEvents().then(function(events) {
		return _.filter(events, ['building', buildId]);
	});
}

function staticMapUrl(tour, width, height) {
	if (tour.event_type === 'Building Tour') {
		var tourImage = encodeURIComponent('{{site.url}}images/icon-tour-building-map.png');
	}
	else{
		var tourImage = encodeURIComponent('{{site.url}}images/icon-tour-walking-map.png');
	}
	return 'https://api.mapbox.com/v4/mapbox.emerald/url-'+tourImage+'('+tour.longitude+','+tour.latitude+')/'+tour.longitude+','+tour.latitude+','+tour.zoom+'/'+width+'x'+height+'.png?access_token={{site.mapbox_api_key}}';
}

$(document).ready(function() {
	getAllTours();
	getAllEvents();
});
