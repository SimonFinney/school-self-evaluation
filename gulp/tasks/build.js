// Build

'use strict';

module.exports = (gulp, runSequence) =>
  gulp.task('build', callback =>
    runSequence('rm', 'minify', 'images', callback)
  );
