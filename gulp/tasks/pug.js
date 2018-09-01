import gulp from 'gulp';
import pug from 'gulp-pug';
import notify from 'gulp-notify';


gulp.task('pugRender', function() {
    gulp.src('./src/pug/**/*.pug')
        .pipe(pug())
        .on('error', notify.onError((error) => {
            return {
                title: 'Pug',
                message: error.message
            }
        }))
        .on('error', (error) => {
            console.log(error.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('./dist'));
});