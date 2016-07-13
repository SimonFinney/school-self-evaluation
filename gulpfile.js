'use strict';

const config = require('./gulp/config');
const gulp = require('gulp');
const runSequence = require('run-sequence');

// Default
require('./gulp/tasks/default')(gulp, runSequence, config.paths);

// BrowserSync
require('./gulp/tasks/browser-sync')(gulp, config.browserSync);

// Build
require('./gulp/tasks/build')(gulp, runSequence);

// Clean
require('./gulp/tasks/clean')(gulp, config.paths);

// ESLint
require('./gulp/tasks/eslint')(gulp, config.paths.js);

// Extras
require('./gulp/tasks/extras')(gulp, config.paths);

// PHP
require('./gulp/tasks/php')(gulp, config.paths);

// PHP validation
require('./gulp/tasks/phplint')(gulp, config.paths.php);

// Images
require('./gulp/tasks/images')(gulp, config);

// JavaScript
require('./gulp/tasks/js')(gulp, config);

// Minify
require('./gulp/tasks/minify')(gulp, config);

// Move
require('./gulp/tasks/rm')(gulp, runSequence);

// Sass
require('./gulp/tasks/sass')(gulp, config);

// Sass-Lint
require('./gulp/tasks/sass-lint')(gulp, config.paths);

// Watch
require('./gulp/tasks/watch')(gulp, runSequence, config.paths);
