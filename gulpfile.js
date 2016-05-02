var gulp        = require('gulp');
var $           = require('gulp-load-plugins')();
var browserSync = require('browser-sync').create();


var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

var cssVendorPaths = [
  'bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
];

var jsFoundationPaths = [
  'bower_components/foundation-sites/js/foundation.core.js',
  'bower_components/foundation-sites/js/foundation.util.mediaQuery.js',
  'bower_components/foundation-sites/js/foundation.util.triggers.js',
  'bower_components/foundation-sites/js/foundation.util.motion.js',  
  'bower_components/foundation-sites/js/foundation.offcanvas.js',
  'bower_components/foundation-sites/js/foundation.equalizer.js',
  'bower_components/foundation-sites/js/foundation.interchange.js',
  'bower_components/foundation-sites/js/foundation.util.timerAndImageLoader.js',   
];

var jsVendorPaths = [
  'bower_components/jquery/dist/jquery.min.js',
  'bower_components/owl.carousel/dist/owl.carousel.min.js',   
];

gulp.task('sass', function() {
  return gulp.src('_sass/app.scss')
    .pipe($.sourcemaps.init())
    .pipe($.sass({
      includePaths: sassPaths
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('css'));
});

gulp.task('cssVendor', function() {
  return gulp.src(cssVendorPaths)
    .pipe(gulp.dest('css/vendor'));
});

gulp.task("foundationJs", function () {
  return gulp.src(jsFoundationPaths)
    .pipe($.babel())
    .pipe($.concat("core.js"))
    .pipe(gulp.dest("js"));
});

gulp.task('jsVendor', function() {
  return gulp.src(jsVendorPaths)
    .pipe(gulp.dest('js/vendor'));
});

gulp.task('serve', function() {
    browserSync.init(['css/*.css', 'js/*.js','./**/*.php'],{
        proxy: "http://localhost/mcr-cur"
    });
});

gulp.task('default', ['sass','serve','foundationJs','cssVendor','jsVendor'], function() {
  gulp.watch(['_sass/**/*.scss'], ['sass']);
});
