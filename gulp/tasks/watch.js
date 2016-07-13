// Watch

'use strict';

module.exports = (gulp, runSequence, paths) =>
  gulp.task('watch', () => {

    // Watch for changes
    gulp.watch(paths.php, () => runSequence('php', 'phplint', 'bs-reload'));
    gulp.watch(`${paths.app}${paths.extras.images}`, () => runSequence('extras', 'bs-reload'));
    gulp.watch(`${paths.js}**`, () => runSequence('eslint', 'js', 'bs-reload'));
    gulp.watch(paths.scss, () => runSequence('sass-lint', 'sass'));
  });
