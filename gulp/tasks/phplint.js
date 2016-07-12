// HTML5 validation

'use strict';

const phplint = require('gulp-phplint');

module.exports = (gulp, phpPath) =>
  gulp.task('phplint', () =>
    gulp.src(phpPath)
      .pipe(phplint())
  );
