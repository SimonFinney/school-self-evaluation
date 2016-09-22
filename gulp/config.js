// Module configuration

'use strict';

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

  this.extras = {
    favicon: '*.ico',
    fonts: 'fonts/**',
    images: `**/*.{${imageExtensions}}`,
  };

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

const autoprefixerConfig = { browsers: browsers };

const browserSyncConfig = {
  notify: false,
  proxy: 'http://192.168.99.100:8080',
};

const htmlminConfig = {
  collapseWhitespace: true,
  removeComments: true,
};

const imageminConfig = {
  interlaced: true,
  progressive: true,
};

const webpackConfig = {
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
  paths: paths,
  autoprefixer: autoprefixerConfig,
  browserSync: browserSyncConfig,
  htmlmin: htmlminConfig,
  imagemin: imageminConfig,
  webpack: webpackConfig,
};
