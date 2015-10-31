var gulp = require('gulp'),
    minifycss = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    sass = require('gulp-ruby-sass');

//compile and minify css
gulp.task('sass', function () {
  gulp.src('styles/src/base.scss')
  .pipe(sass())
  .pipe(minifycss())
  .pipe(concat("base.min.css"))
  .pipe(gulp.dest('styles/dest'))
});


// set default tasks to compile sass
gulp.task('default', [
    'sass'
], function() {
  gulp.start('watch');
});

// watch for changes to css & js
gulp.task('watch', function() {
  gulp.watch(['styles/src/*'], ['sass']);
});
