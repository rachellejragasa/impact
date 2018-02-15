const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync');

gulp.task('sass', function () {
  return gulp.src('assets/scss/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('watch', ['browserSync', 'sass'], function () {
  gulp.watch('assets/scss/*.scss', ['sass']);
  // Other watchers
})

gulp.task('browserSync', function() {
  const files = [
      'style.css',
      '*.php'
  ];

  browserSync.init(files, {
      proxy: 'http://localhost:8888/'
  })
});


