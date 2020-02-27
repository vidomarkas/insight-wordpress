const browsersync = require("browser-sync");
const gulp = require("gulp");
const { series } = require("gulp");
const sass = require("gulp-sass");

function style() {
  return gulp
    .src("./scss/**/style.scss")
    .pipe(sass())
    .pipe(gulp.dest("./"))
    .pipe(browsersync.stream());
}

function watch() {
  browsersync.init({
    proxy: "localhost/wordpress/"
  });

  gulp.watch("./scss/**/*.scss", { delay: 1000 }, style);
  gulp.watch("./*.php").on("change", browsersync.reload);
  gulp.watch("./js/**/*.js").on("change", browsersync.reload);
}

exports.style = style;
exports.watch = watch;

exports.default = series(watch, style);
