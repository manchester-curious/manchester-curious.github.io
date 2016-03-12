var gulp        = require('gulp');
var $           = require('gulp-load-plugins')();
var browserSync = require('browser-sync').create();

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
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

gulp.task('serve', function() {
    browserSync.init(['css/*.css', 'js/*.js','./**/*.php'],{
        proxy: "http://localhost/mcr-cur"
    });
});

gulp.task('default', ['sass','serve'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});
