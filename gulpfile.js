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
    autoprefixer = require('gulp-autoprefixer'),
    csscomb = require('gulp-csscomb'),
    uglify = require('gulp-uglify'),
    plumber = require('gulp-plumber'),
    changed = require('gulp-changed'),
    ignoreErrors = require('gulp-ignore-errors'),
    minifyCss = require('gulp-minify-css'),
    processhtml = require('gulp-processhtml'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    svg2png = require('gulp-svg2png'),
    svgmin = require('gulp-svgmin'),
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
     'sources/js/top-navigation.js',
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

  gulp.task('less', function() {
    gulp.src('sources/styles/styles.less')
   //   .pipe(sourcemaps.init())
      .pipe(less())
   //   .pipe(sourcemaps.write('./'))
   // .pipe(rename('app.min.css'))
      .pipe(gulp.dest('build/css'))
      .pipe(notify('ok'));
  });


gulp.task('js-merge', function() {
  return gulp.src(JSFiles)
    .pipe(concat('app.js'))
      .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('build/js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('build/js'))
    .pipe(size({
        title: 'Total JavaScript'
    }));
});

gulp.task('images', function () {
    return gulp.src('sources/img/**/*.*')
        .pipe(changed('sources/img'))
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

gulp.task('svg', function () {
    return gulp.src('sources/svg-icons/**/*.*')
        .pipe(size({
            title: 'SVG'
        }))
        .pipe(gulp.dest('build/img/svg'));
});


gulp.task('fonts', function() {
    return gulp.src('sources/fonts/**/*.*')
        .pipe(size({
            title: 'Fonts'
        }))
        .pipe(gulp.dest('build/fonts'));
});

gulp.task('videos', function() {
    return gulp.src('sources/video/**/*.*')
        .pipe(changed('sources/video'))
        .pipe(size({
            title: 'Videos'
        }))
        .pipe(gulp.dest('build/video'));
});

gulp.task('build', function(callback) {
    runSequence(
        'html',
        'less',
        'js-merge',
        'watch',
        callback)
});

gulp.task('watch', function () {
    gulp.watch('sources/styles/**/*.less', ['less']);
    gulp.watch('sources/js/*.js', ['js-merge']);
    gulp.watch('sources/*.php', ['html']);
});

gulp.task('default', ['less' ]);