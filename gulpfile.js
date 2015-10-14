// by Andrey Starkov (im@andreystarkov.ru)

var gulp = require('gulp'),
    rename = require("gulp-rename"),
    notify = require('gulp-notify'),
    del = require('del'),
    size = require('gulp-size'),
    path = require('path'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    clean = require('gulp-clean'),
    less = require('gulp-less'),
    uglify = require('gulp-uglify'),
  //  plumber = require('gulp-plumber'),
    changed = require('gulp-changed'),
  //  ignoreErrors = require('gulp-ignore-errors'),
    minifyCss = require('gulp-minify-css'),
    processhtml = require('gulp-processhtml'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    svg2png = require('gulp-svg2png'),
 //   svgmin = require('gulp-svgmin'),
    runSequence = require('run-sequence').use(gulp);

    var JSFiles = [
     'sources/libs/classie/classie.js',
     'sources/libs/bootstrap-material-design/dist/js/material.min.js',
     'sources/libs/bootstrap-material-design/dist/js/ripples.min.js',
     'sources/libs/jquery-waypoints/lib/jquery.waypoints.min.js',
     'sources/libs/snackbarjs/src/snackbar.js',
     'sources/libs/vivus/dist/vivus.min.js',
     'sources/libs/flexslider/jquery.flexslider-min.js',
     'sources/libs/fancybox/source/jquery.fancybox.js',
     'sources/libs/vide/dist/jquery.vide.min.js',
     'sources/libs/wow/dist/wow.min.js',
     'sources/js/vendor/transit.min.js',
     'sources/js/instagram.js',
     'sources/js/scroll.js',
     'sources/js/slider.js',
     'sources/js/scripts.js',
     'sources/js/template.js',
     'sources/js/init.js'
    ];

  gulp.task('html', function () {
      return gulp.src('sources/*.php')
          .pipe(processhtml({
              recursive: true
          }))
          .pipe(size({
              title: 'HTML'
          }))
          .pipe(gulp.dest('build'));
  });

gulp.task('clean', function() {
    return gulp.src(['build/css']).pipe(clean());
});


var LessPluginCleanCSS = require('less-plugin-clean-css'),
    LessPluginAutoPrefix = require('less-plugin-autoprefix'),
    LessPluginCSScomb = require('less-plugin-csscomb');

  gulp.task('less', function() {

  var cleancss = new LessPluginCleanCSS({ advanced: true }),
  autoprefix = new LessPluginAutoPrefix({ browsers: ["last 2 versions"] });

    return gulp.src('sources/styles/styles.less')
        .pipe(sourcemaps.init())
        .pipe(less({ plugins: [autoprefix, cleancss]}))
        .pipe(gulp.dest('sources/css'))
        .pipe(sourcemaps.write('./'))
        .pipe(size({
            title: 'LESS'
        }));
});

gulp.task('material', function() {
  var cleancss = new LessPluginCleanCSS({ advanced: true }),
  autoprefix = new LessPluginAutoPrefix({ browsers: ["last 2 versions"] });

    return gulp.src('sources/libs/bootstrap-material-design/less/material-fullpalette.less')
        .pipe(sourcemaps.init())
        .pipe(less({ plugins: [autoprefix, cleancss]}))
        .pipe(gulp.dest('sources/css'))
        .pipe(sourcemaps.write('./'))
        .pipe(size({
            title: 'Material'
        }));
});

gulp.task('bootstrap', function() {
  var cleancss = new LessPluginCleanCSS({ advanced: true });

    return gulp.src('sources/libs/bootstrap/less/bootstrap.less')
        .pipe(less())
        .pipe(gulp.dest('sources/css'))
        .pipe(size({
            title: 'Bootstrap'
        }));
});

gulp.task('css-concat', function() {
  return gulp.src([
    'sources/fonts/*.css',
    'sources/libs/animate.css/animate.min.css',
    'sources/libs/bootstrap-material-design/dist/css/ripples.min.css',
    'sources/css/bootstrap.css',
    'sources/css/material-fullpalette.css',
    'sources/css/styles.css'
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('styles.css'))
    .pipe(gulp.dest('build/css'))
    .pipe(sourcemaps.write('./'))
    .pipe(size({
        title: 'Concat CSS'
    }));
});

gulp.task('css-min', function() {
  return gulp.src('build/css/styles.css')
    .pipe(sourcemaps.init())
    .pipe(minifyCss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('build/css'))
    .pipe(size({
        title: 'Minify CSS'
    }));
});


gulp.task('js-min', function() {
  return gulp.src(JSFiles)
    .pipe(concat('app.js'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('build/js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('build/js'))
    .pipe(size({
        title: 'JS Min'
    }));
});

gulp.task('images', function () {
    return gulp.src('sources/img/**/*.jpg')
        .pipe(imagemin({
            progressive: true,
            optimizationLevel: 5,
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(size({
            title: 'Images'
        }))
        .pipe(gulp.dest('build/img'));
});


gulp.task('styles', function(callback) {
    runSequence(
        'clean',
        'less',
        'css-concat',
        callback)
});

gulp.task('build', function(callback) {
    runSequence(
        'clean',
        'html',
        'bootstrap',
     //   'material',
        'less',
        'css-concat',
        'js-min',
        'css-min',
        'watch',
        callback)
});

gulp.task('heavy', function(callback){
    runSequence('css-min',callback);
});

gulp.task('watch', function () {
    gulp.watch('sources/styles/**/*.less', ['styles']);
    gulp.watch('sources/js/*.js', ['js-min']);
    gulp.watch('build/css/app.css', ['css-concat']);
    gulp.watch('sources/*.php', ['html']);
});

gulp.task('default', ['watch']);