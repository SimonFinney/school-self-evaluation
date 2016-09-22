// JavaScript

'use strict';

const webpack = require('webpack-stream');

module.exports = (gulp, config) =>
  gulp.task('js', () =>
    gulp.src(`${config.paths.js}main.js`)
      .pipe(webpack(config.webpack))
      .pipe(gulp.dest(`${config.paths.distDir}js`))
  );
