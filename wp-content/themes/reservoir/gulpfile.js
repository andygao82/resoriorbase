var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var sourcemaps  = require('gulp-sourcemaps');

// CSS task
function css() {
    return gulp
        .src([
            'sass/style.scss',
            'sass/*.scss'
        ])
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .on("error", sass.logError)
        .pipe(concat('styles.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream());
}


// Watch files
function watch() {
    browserSync.init({
        //browsersync with a php server
        proxy: "http://localhost/resoriorbase/",
        notify: true
    });
    gulp.watch("./sass/**/*", css);
    gulp.watch('./*.php').on('change',browserSync.reload);
}


exports.css = css;
exports.watch = watch;