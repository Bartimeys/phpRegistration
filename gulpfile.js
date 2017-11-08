var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync'),
    imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache'),
    runSequence = require('run-sequence'),
    clean = require('gulp-clean');
 
// Development Tasks 
// -----------------
gulp.task('browserSync', function() {
   connect.server({
	base: './dist'
	}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });
});

gulp.task('sass', function() {
  return gulp.src('app/assets/scss/*.scss')
	.pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest('dist/assets/css'))
    .pipe(browserSync.reload({ // Reloading with Browser Sync
      stream: true
    }));
});

gulp.task('scripts', function() {
    return gulp.src(['node_modules/jquery/dist/jquery.js',
        'node_modules/jquery-validation/dist/jquery.validate.js',
        'node_modules/jquery-validation/dist/additional-methods.js',
        'app/assets/js/**/*.js'])
        .pipe(sourcemaps.init())
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dist/assets/js'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('images', function() {
    return gulp.src('app/assets/images/**/*.+(png|jpg|jpeg|gif|svg)')
        .pipe(cache(imagemin({
            interlaced: true
        })))
        .pipe(gulp.dest('dist/assets/images'))
});

gulp.task('php', function() {
    return gulp.src('app/**/*.php')
        .pipe(gulp.dest('dist'))
});

gulp.task('fonts', function() {
    return gulp.src('app/assets/fonts/**/*')
        .pipe(gulp.dest('dist/assets/fonts'))
});

gulp.task('watch', function() {
    gulp.watch('app/assets/scss/**/*.scss', ['sass', browserSync.reload]);
    gulp.watch('app/assets/js/**/*.js', ['scripts', browserSync.reload]);
    gulp.watch('app/**/*.php', ['php', browserSync.reload]);
});

gulp.task('clean', function() {
    return gulp.src(['dist/*'], {read: false})
        .pipe(clean());
});

gulp.task('default', ['clean'], function() {
    runSequence(['sass', 'scripts', 'images', 'php', 'fonts'], 'browserSync', 'watch');
});