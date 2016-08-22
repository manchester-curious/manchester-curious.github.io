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

Handlebars.registerHelper('formatTime', function(str) {
	var timeParts = str.split(':');
	if (timeParts.length == 3) {
		return timeParts[0] + ':' + timeParts[1];
	}
	return str;
});

Handlebars.registerHelper('formatDate', function(str) {
	var dateParts = str.split('-');
	if (dateParts.length == 3) {
		switch(dateParts[2]) {
			case '06': return 'Thu 6th October';
			case '07': return 'Fri 7th October';
			case '08': return 'Sat 8th October';
			case '09': return 'Sun 9th October';
			default: return str;
		}
	}
	return str;
});