import gulp from 'gulp';
import pug from 'gulp-pug';


gulp.task('pugRender', function() {
    gulp.src('./src/pug/**/*.pug')
        .pipe(pug())
        .pipe(gulp.dest('./dist'));
});