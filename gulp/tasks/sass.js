// Sass
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const rename = require('gulp-rename');
const rtlcss = require('gulp-rtlcss');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');

module.exports = (gulp, config) => {
  const distDir = `${config.paths.distDir}css`;

  gulp.task('sass:dist', () =>
    gulp.src(config.paths.scss)
      .pipe(sourcemaps.init())
      .pipe(
        sass(config.sass).on('error', sass.logError)
      )
      .pipe(autoprefixer(config.autoprefixer))
      .pipe(sourcemaps.write())
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest(distDir))
      .pipe(browserSync.stream())
  );

  gulp.task('sass', () =>
    gulp.src(config.paths.scss)
      .pipe(sourcemaps.init())
      .pipe(
        sass().on('error', sass.logError)
      )
      .pipe(autoprefixer(config.autoprefixer))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(config.paths.basePath))
      .pipe(browserSync.stream())
      .pipe(rtlcss())
      .pipe(rename({ basename: 'rtl' }))
      .pipe(gulp.dest(config.paths.basePath))
      .pipe(browserSync.stream())
  );
};
