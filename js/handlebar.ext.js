Handlebars.registerHelper('capitalise', function(str) {
  return _.capitalize(str);
});

Handlebars.registerHelper('toCssClass', function(str) {
  return _.replace(_.lowerCase(str), ' ', '');
});