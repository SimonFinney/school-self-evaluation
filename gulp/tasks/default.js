// Default

module.exports = (gulp, runSequence) =>
  gulp.task('default', done =>
    runSequence('mv', 'watch', 'browser-sync', done)
  );
