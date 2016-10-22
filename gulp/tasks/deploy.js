// Deploy
const vinylFtp = require('vinyl-ftp');

module.exports = (gulp, config) =>

gulp.task('deploy', () => {
  const connection = vinylFtp.create(config.vinylFtp);

  gulp.src(`${config.paths.basePath}**/*`)
    .pipe(
      connection.newer(config.vinylFtp.path)
    )
    .pipe(
      connection.dest(config.vinylFtp.path)
    );
});
