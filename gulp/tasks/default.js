// Default

'use strict';

module.exports = (gulp, runSequence) =>
  gulp.task('default', done =>
    runSequence('rm', 'watch', 'browser-sync', done)
  )
