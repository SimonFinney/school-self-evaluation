// Move

'use strict';

module.exports = (gulp, runSequence) =>
  gulp.task('rm', done =>
    runSequence('clean', 'php', 'sass', 'js', 'extras', done)
  );