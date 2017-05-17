'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var rename = require('gulp-rename');

var paths = {
    sass: 'sass/{,*/}*.scss',
};

gulp.task('sass', function() {
    return gulp.src('sass/index.scss')
        .pipe(sass({
            sourceComments: 'none'
        }))
        .on('error', onError)
        .pipe(prefix(['last 2 versions', 'ie >= 10']))
        .pipe(rename('app.css'))
        .pipe(gulp.dest(''));
});

gulp.task('build', ['sass']);
gulp.task('default', ['build'], function() {
    gulp.watch(paths.sass, ['sass']);
});



/**
 * Utils.
 */

var gutil = require('gulp-util');
var notify = require('gulp-notify');
var isStream = require('isstream');
var os = require('os');

function onError() {
	var args = Array.prototype.slice.call(arguments);

	// error to notification center with gulp-notify
	if ('win32' != os.platform()) {
		notify.onError({
			title: "Compile Error",
			message: "<%= error.message %>"
		}).apply(this, args);
	}
	else {
		gutil.log("Compile Error", args[0].message, gutil.colors.red);
	}

	// keep gulp from hanging on this task
	if (isStream(this)) this.emit('end');
}