// Module configuration

'use strict';

const util = require('gulp-util');
const ftpCredentials = require('../FTP_CREDENTIALS.json');

// Paths
const imageExtensions = [
  'gif',
  'jpg',
  'png',
  'svg',
];

const paths = new (function() {
  this.basePath = 'app/wp-content/themes/school-self-evaluation/';
  this.app = `${this.basePath}assets/`;
  this.distDir = `${this.basePath}dist/`;;
  this.images = `**/*.{${imageExtensions}}`,
  this.php = `${this.app}templates/**/*.php`;
  this.js = `${this.app}js/**`;
  this.scss = `${this.app}scss/**/*.scss`;
});


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

const vinylFtp = {
  host: ftpCredentials.host,
  user: ftpCredentials.user,
  maxConnections: 8,
  password: ftpCredentials.password,
  path: ftpCredentials.path,
  log: util.log,
};

const webpack = {
  devtool: 'source-map',
  output: {
    filename: 'bundle.js',
  },
  module: {
    loaders: [
      {
        test: /\.jsx?$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel',
        query: {
          presets: ['es2015'],
        }
      }
    ]
  }
};

module.exports = {
  paths,
  autoprefixer,
  browserSync,
  htmlmin,
  imagemin,
  vinylFtp,
  webpack,
};
