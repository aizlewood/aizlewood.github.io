"use strict";

/*************************************
 *  Packages
 *************************************/

const del               = require('del');
const gulp              = require('gulp');
const rename            = require('gulp-rename');
const concat            = require('gulp-concat');
const sass              = require('gulp-sass');
const sassGlob          = require('gulp-sass-glob');
const autoprefixer      = require('gulp-autoprefixer');
const babel             = require('gulp-babel');
const notify            = require('gulp-notify');


/*************************************
 *  Tasks
 *************************************/

/*************************************
 *  SASS pre-processing
 *************************************/

gulp.task('sass', ['sass:clean'], () => {

    return gulp.src('assets/sass/main.scss')

        .pipe(sassGlob())

        .pipe(sass({
            includePaths: ['node_modules']
        }))
        .on("error", notify.onError(function (error) {
                console.log(error.message);
                console.log(error.stack);
                let msg         = error.message;
                let file        = msg.split(":")[0].split('/').pop();

                return "Gulp: Error in " + file;
            })
        )

        // autoprefix
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9']
        }))

        .pipe(gulp.dest('public/assets/css'));
});

gulp.task('sass:clean', () => {
    del('public/assets/css/*');
});


/*************************************
 *  JS pre-processing
 *************************************/

gulp.task('js', ['js:clean'], () => {

    return gulp.src([
            'assets/js/vendor/*',
            'assets/js/components/*',
            'assets/js/main.js'
        ])

        .pipe( babel({ "presets": ["es2015"] }) )
        .on("error", notify.onError(function (error) {
                console.log(error.message);
                console.log(error.stack);
                let msg         = error.message;
                let file        = msg.split(":")[0].split('/').pop();

                return "Gulp: Error in " + file;
            })
        )
        // .on('error', function(error) {
        //     console.log(error.message.toString());
        //     console.log(error.stack.toString());
        //     process.stdout.write('\x07'); // make a noise (super quiet, but still)
        //     this.emit('end');
        // })
        .pipe(concat('main.js'))

        .pipe(gulp.dest('public/assets/js'));
});

gulp.task('js:clean', () => {
    del('public/assets/js/*');
});


/*************************************
 *  Image pre-processing
 *************************************/

gulp.task('img', ['img:clean'], () => {

    return gulp.src('assets/img/*')

        .pipe(gulp.dest('public/assets/img'));
});

gulp.task('img:clean', () => {
    del('public/assets/img/*');
});


// Watchers

gulp.task('sass:watch', ['sass'], () => {
    gulp.watch('assets/sass/**/*', ['sass']);
});

gulp.task('js:watch', ['js'], () => {
    gulp.watch('assets/js/**/*', ['js']);
});

gulp.task('img:watch', ['img'], () => {
    gulp.watch('assets/img/**/*', ['img']);
});


// Task sets

gulp.task('watch', ['sass:watch', 'js:watch', 'img:watch']);

gulp.task('default', ['sass', 'js', 'img']);
