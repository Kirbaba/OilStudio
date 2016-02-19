var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');

gulp.task('minify-css', function() {
  return gulp.src('css/style.css')
    .pipe(minifyCSS({keepBreaks:false}))
    .pipe(rename('style.min.css'))
});


gulp.task('styles', function() {
    gulp.src('src/sass/**/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('./sass/'));
});


//Watch task
gulp.task('default',function() { 
  
});

gulp.task('watch', function() {
	gulp.watch('src/sass/**/*.scss', function(){
		gulp.run('minify-css');
		gulp.run('styles');
	});
});