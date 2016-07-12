// Clean

'use strict';

const del = require('del');

module.exports = (gulp, paths) => {
  gulp.task('clean', function(done) {
    del([paths.distDir])
      .then(() => done());
  });
};
