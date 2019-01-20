// Move

module.exports = (gulp, runSequence) =>
  gulp.task('mv', done =>
    runSequence('clean', 'php', 'sass', 'sass:dist', 'js', 'images', done)
  );
