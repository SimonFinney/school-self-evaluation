// Module configuration
const util = require('gulp-util');
const webpack = require('webpack');

const { HOST, PASSWORD, PATH, USER } = require('../FTP_CREDENTIALS.json');

// Paths
const imageExtensions = ['gif', 'jpg', 'png', 'svg'];

const paths = new function createPaths() {
  this.basePath = 'app/wp-content/themes/school-self-evaluation/';
  this.app = `${this.basePath}assets/`;
  this.distDir = `${this.basePath}dist/`;
  this.images = `**/*.{${imageExtensions}}`;
  this.php = `${this.app}templates/**/*.php`;
  this.js = `${this.app}js/**`;
  this.scss = `${this.app}scss/**/style.scss`;
}();

// Configuration
const browsers = [
  '> 5%',
  'ie > 0',
  'Firefox > 0',
  'Chrome > 0',
  'Opera > 0',
  'OperaMobile > 0',
  'OperaMini > 0',
  'Safari > 0',
  'iOS > 0',
  'Blackberry > 0',
  'Android > 0',
];

const autoprefixer = { browsers };

const browserSync = {
  notify: false,
  proxy: 'http://192.168.99.100:8080',
};

const htmlmin = {
  collapseWhitespace: true,
  removeComments: true,
};

const imagemin = {
  interlaced: true,
  progressive: true,
};

const sass = { outputStyle: 'compressed' };

const vinylFtp = {
  host: HOST,
  user: USER,
  maxConnections: 8,
  password: PASSWORD,
  path: PATH,
  log: util.log,
};

const webpackConfig = {
  devtool: 'source-map',
  module: {
    loaders: [
      {
        test: /\.jsx?$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel',
        query: {
          presets: ['es2015'],
        },
      },
    ],
  },
  output: {
    filename: 'bundle.min.js',
  },
  plugins: [
    new webpack.optimize.UglifyJsPlugin({
      compress: {
        warnings: false,
      },
    }),
  ],
};

module.exports = {
  paths,
  autoprefixer,
  browserSync,
  htmlmin,
  imagemin,
  sass,
  vinylFtp,
  webpackConfig,
};
