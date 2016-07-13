// Move

'use strict';

module.exports = (gulp, runSequence) =>
  gulp.task('rm', done =>
    runSequence('clean', 'sass', 'js', 'extras', done)
  );
