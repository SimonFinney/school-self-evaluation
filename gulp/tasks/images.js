// Images
const imagemin = require('gulp-imagemin');

module.exports = (gulp, config) =>
  gulp.task('images', () =>
    gulp.src(`${config.paths.app}${config.paths.images}`)
      .pipe(imagemin(config.imagemin))
      .pipe(gulp.dest(config.paths.distDir))
  );
