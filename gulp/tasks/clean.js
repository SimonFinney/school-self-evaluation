// Clean
const del = require('del');

module.exports = (gulp, paths) => {
  gulp.task('clean', done => {
    del([paths.distDir]).then(() => done());
  });
};
