// gulpfile.js
const { watch, series, src, dest } = require("gulp");
var browserSync = require("browser-sync").create();
var postcss = require("gulp-postcss");
var cssimport = require("gulp-cssimport");
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');

var options = {
    matchPattern: "*.css"
};

// Task for compiling our CSS files using PostCSS
function cssTask(cb) {
    return src("./assets/scss/main.scss")
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss())
        .pipe(cssimport(options))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(dest("./assets/css"))
        .pipe(browserSync.stream());
    cb();
}

// Serve from browserSync server
function browsersyncServe(cb) {
    browserSync.init({
        proxy: "localhost/clients/flavio-e-flavia/"
    });
    cb();
}

function browsersyncReload(cb) {
    browserSync.reload();
    cb();
}

// Watch Files & Reload browser after tasks
function watchTask() {
    watch("./**/*.php", series(cssTask, browsersyncReload));
    watch(["assets/scss/**/*.scss"], series(cssTask, browsersyncReload));
}

// Default Gulp Task
exports.default = series(cssTask, browsersyncServe, watchTask);
exports.css = cssTask;