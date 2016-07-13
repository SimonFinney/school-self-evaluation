// Build

'use strict';

module.exports = (gulp, runSequence) =>
  gulp.task('build', done =>
    runSequence('rm', 'minify', 'images', done)
  );
