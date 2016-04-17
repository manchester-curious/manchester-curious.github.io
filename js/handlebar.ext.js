Handlebars.registerHelper('capitalise', function(str) {
  return _.capitalize(str);
});

Handlebars.registerHelper('removeWhitespace', function(str) {
  return _.replace(str, ' ', '');
});