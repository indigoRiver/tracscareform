var gulp = require('gulp');
var browserSync = require('browser-sync').create();


gulp.task('default', function() {
  // place code for your default task here
});
gulp.task('serve', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });

    gulp.watch("css/*.css").on('change', browserSync.reload);
    gulp.watch("./*.html").on('change', browserSync.reload);

});
