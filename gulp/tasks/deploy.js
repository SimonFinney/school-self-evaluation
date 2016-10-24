// Deploy
const vinylFtp = require('vinyl-ftp');

module.exports = (gulp, config) =>

gulp.task('deploy', () => {
  const connection = vinylFtp.create(config.vinylFtp);
  const assetsFolder = config.paths.app.slice(0, -1);

  gulp.src([
    `!${assetsFolder}{,/**}`,
    `${config.paths.basePath}**/*`,
  ])
    .pipe(
      connection.newer(config.vinylFtp.path)
    )
    .pipe(
      connection.dest(config.vinylFtp.path)
    );
});
