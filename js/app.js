$(document).foundation();

var BUILDINGS_CACHE_KEY = 'buildings';
var EVENTS_CACHE_KEY = 'events';
var pageCache = {};

function getObject(cacheKey, url) {
	
	if (localStorage) {
		var dfd = $.Deferred();
		var object = localStorage.getCacheItem(cacheKey);
		if (object) {
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

function getAllEvents() {
	if (!pageCache.events) {
		pageCache.events = getObject(EVENTS_CACHE_KEY, "http://buildings.manchestercurious.com/wp-json/wp/v2/events");
	}
	return pageCache.events;
}

$(document).ready(function() {
	getAllTours();
	getAllEvents();
});

