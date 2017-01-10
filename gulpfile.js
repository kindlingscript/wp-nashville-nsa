var gulp = require('gulp'),
watch = require('gulp-watch'),
rename = require('gulp-rename'),
browserSync = require('browser-sync').create();

gulp.task('watch', function() {
  browserSync.init({
    notify: false,
    files: ['./**/*.php'],
    proxy: 'http://localhost/NashvilleStutter'
  });

  watch('./index.php', function() {
    browserSync.reload();
  });

  watch('./css/main.css', function() {
    gulp.start('injectStyles');
  });
});

gulp.task('injectStyles', function() {
  return gulp.src('./css/main.css')
    .pipe(rename('style.css'))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.stream());
});
