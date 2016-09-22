// Images

'use strict';

const imagemin = require('gulp-imagemin');

module.exports = (gulp, config) =>
  gulp.task('images', () =>
    gulp.src(`${config.paths.app}${config.paths.extras.images}`)
      .pipe(imagemin(config.imagemin))
      .pipe(gulp.dest(config.paths.distDir))
  );