// BrowserSync
const browserSync = require('browser-sync');

module.exports = (gulp, browserSyncConfig) => {
  gulp.task('browser-sync', () => browserSync.init(browserSyncConfig));
  gulp.task('bs-reload', browserSync.reload);
};
