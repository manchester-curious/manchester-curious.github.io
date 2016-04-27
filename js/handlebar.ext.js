Handlebars.registerHelper('capitalise', function(str) {
  return _.capitalize(str);
});

Handlebars.registerHelper('toCssClass', function(str) {
  return _.replace(_.lowerCase(str), ' ', '');
});


Handlebars.registerHelper('toDuration', function(str) {
	function toHours(hours) {
		if (hours == 1) {
			return '1 hour';
		} else {
			return hours + ' hours';
		}
	}

	var totalMinutes = parseInt(str);
	if (isNaN(totalMinutes)) {
		return '';
	}
	var hours = Math.floor( totalMinutes / 60);          
    var minutes = totalMinutes % 60;

    if (hours > 0) {
    	if (minutes > 0) {
    		return toHours(hours) + ' ' + minutes + ' minutes';
    	} else {
    		return toHours(hours);
    	}
    }

    return minutes + ' minutes';
});