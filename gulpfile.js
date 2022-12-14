//npm install -D gulp sass gulp-sass gulp-postcss autoprefixer cssnano gulp-terser gulp-purgcss postcss autoprefixer
// Initialize modules
const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const terser = require("gulp-terser");

// Sass Task
function scssTask() {
  return src("assets/src/css/style.scss", { sourcemaps: true })
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(dest("assets/dist/css", { sourcemaps: "." }));
}

// JavaScript Task
function jsTask() {
  return src("assets/src/js/*.js", { sourcemaps: true })
    .pipe(terser())
    .pipe(dest("assets/dist/js", { sourcemaps: "." }));
}

// Watch Task
function watchTask() {
  watch(
    ["assets/src/css/**/*.{css,scss}", "assets/src/**/*.js", "./*.{html,php}"],
    series(scssTask, jsTask)
  );
}

// Default Gulp Task
exports.default = series(scssTask, jsTask, watchTask);

// Build Gulp Task
exports.build = series(scssTask, jsTask);
