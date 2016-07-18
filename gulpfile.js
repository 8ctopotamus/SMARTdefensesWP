'use strict';
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var livereload = require('gulp-livereload');
var sass = require('gulp-sass');

gulp.task('sass', function () {

  return gulp.src('./sass/**/*.scss')
    .pipe(autoprefixer({
      browsers: ['last 3 versions'],
      flexbox: true
    }))
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./'))
    .pipe(livereload('../index.html'));
});

gulp.task('sass:watch', function () {
  livereload.listen();
  gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'sass:watch']);
