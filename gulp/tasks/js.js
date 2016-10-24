// JavaScript
const webpack = require('webpack');
const webpackStream = require('webpack-stream');

module.exports = (gulp, configToModify) => {
  const config = configToModify;

  config.webpack.plugins = [
    new webpack.optimize.UglifyJsPlugin({
      compress: {
        warnings: false,
      },
    }),
  ];

  gulp.task('js', () =>
    gulp.src(`${config.paths.js}index.js`)
      .pipe(webpackStream(config.webpack))
      .pipe(gulp.dest(`${config.paths.distDir}js`))
  );
};
