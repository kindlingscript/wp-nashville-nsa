var gulp = require('gulp'),
watch = require('gulp-watch'),
rename = require('gulp-rename'),
postcss = require('gulp-postcss'),
cssImport = require('postcss-import'),
cssMixins = require('postcss-mixins'),
cssVariables = require('postcss-simple-vars'),
cssNested = require('postcss-nested'),
hexrgba = require('postcss-hexrgba'),
cssAutoprefixer = require('autoprefixer'),
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

  watch('./css/**/*.css', function() {
    gulp.start('injectStyles');
  });
});

gulp.task('injectStyles', function() {
  return gulp.src('./css/main.css')
    .pipe(postcss([cssImport, cssMixins, cssVariables, cssNested, hexrgba, cssAutoprefixer]))
    .on('error', function(errorInfo) {
      console.log(errorInfo.toString());
      this.emit('end');
    })
    .pipe(rename('style.css'))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.stream());
});
