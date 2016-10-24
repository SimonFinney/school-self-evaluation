// Move

module.exports = (gulp, runSequence) =>
  gulp.task('rm', done =>
    runSequence('clean', 'php', 'sass', 'js', 'images', done)
  );
