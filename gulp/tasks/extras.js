// Extras

'use strict';


function appendPath(sourcePath, property) {
  return `${sourcePath}${property}`;
}


module.exports = (gulp, paths) => {
  const extras = paths.extras;


  function rm(sourcePath, destinationPath) {
    const e = [];

    for (const extra in extras) {

      if (Array.isArray(extras[extra])) {

        const pathArray = extras[extra];

        pathArray.forEach(function(pathArrayItem) {
          const isNot = '!';

          pathArrayItem = (pathArrayItem.indexOf(isNot) > -1) ? (isNot + appendPath(sourcePath, pathArrayItem.replace(isNot, ''))) : appendPath(sourcePath, pathArrayItem);
          e.push(pathArrayItem);
        });

      } else {

        e.push(appendPath(sourcePath, extras[extra]));
      }
    }
    

    return gulp.src(e, { base: sourcePath })
      .pipe(gulp.dest(destinationPath));
  }


  gulp.task('extras', () => rm(paths.app, paths.distDir));
};
