// PHP

module.exports = (gulp, paths) =>
  gulp.task('php', () =>
    gulp.src(paths.php)
      .pipe(gulp.dest(paths.basePath))
  );
