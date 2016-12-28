var gulp = require('gulp');
var livereload = require('gulp-livereload');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
  gulp.src('/Applications/MAMP/htdocs/MyBlog/wp-content/themes/MyBlog_theme/sass/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest('/Applications/MAMP/htdocs/MyBlog/wp-content/themes/MyBlog_theme/'));
});

gulp.task('default', function(){
    livereload.listen();
    gulp.watch('/Applications/MAMP/htdocs/MyBlog/wp-content/themes/MyBlog_theme/sass/**/*.scss', ['sass']);
    gulp.watch(['/Applications/MAMP/htdocs/MyBlog/wp-content/themes/MyBlog_theme/style.css'], function (files){
        livereload.changed(files);
    });
});
