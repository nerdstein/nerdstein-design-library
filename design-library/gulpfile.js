var gulp      = require('gulp'),
    sass        = require('gulp-sass'),
    sourcemaps  = require('gulp-sourcemaps'),
    prefix      = require('gulp-autoprefixer'),
    sassLint    = require('gulp-sass-lint');
var concat = require('gulp-concat');
var minify = require('gulp-minify-css');
var merge = require('merge-stream');
var shell = require('gulp-shell');
var sassGlob = require('gulp-sass-glob');

// Directories for storing sass and css files
// var sassFiles = ['source/_patterns/**/*.scss','source/scss/scss.scss'];
var sassFiles = ['source/**/*.scss'];

var cssDir    = 'source/css';
var jsDir     = 'source/js/*.js';

// Gulp-sass options. Log errors to console and compile expanded css
var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed' // Change to 'compressed' for production files
};

// Set up sass linting task
gulp.task('lint-sass', gulp.series(function () {
    return gulp.src(sassFiles)
        .pipe(sassLint({
            rules: {
                // 'class-name-format': 0
            },
            files: {
                ignore: 'sass/**/breakpoint/**.scss'
            }
        }))
        .pipe(sassLint.format())
        .pipe(sassLint.failOnError());
}));

gulp.task('sass', gulp.series(function () {
    return gulp.src(sassFiles)
        //.pipe(sourcemaps.init())
        .pipe(sassGlob())
        .pipe(sass({
            outputStyle: 'compressed',
            // This includes paths for susy, typey and breakpoint. So we can add import their variables
            // directly from Sass stylesheets.
            includePaths: [
                'node_modules/susy/sass',
                'node_modules/breakpoint-sass/stylesheets',
                'node_modules/typey/stylesheets'
            ]
        }).on('error', sass.logError))
        .pipe(prefix({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        //.pipe(sourcemaps.write())
        .pipe(concat('style.css'))
        .pipe(minify())
        .pipe(gulp.dest(cssDir));
}));

// Start the pattern lab server and watch for changes
gulp.task('patternlab', shell.task('php core/console --server --with-watch'));

// Export patternlab changes
gulp.task('export-patternlab', shell.task('php core/console --export'));

// Keep an eye on Sass files for changes and only lint changed files
// This prevents Sass error reporting from contributes Sass files from other projects
// Also speeds things up.
gulp.task('watch', function () {
    // gulp.watch(sassFiles, function(ev) {
    //     if (ev.type === 'added' || ev.type === 'changed') {
    //         lintFile(ev.path);
    //     }
    // });

    // Compile sass changes
    return gulp.watch(sassFiles, gulp.series('sass'));
});

function lintFile(file) {
    gulp.src(file)
        .pipe(sassLint())
        .pipe(sassLint.format());
}

gulp.task('default', gulp.series(['export-patternlab', 'patternlab', 'sass', 'watch'], function (){}));
