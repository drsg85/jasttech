import gulp from 'gulp';
import pug from 'gulp-pug';
import { onError } from 'gulp-notify';

const dirs = {
    pug: './src/pug/**/*.pug',
    dest: './dist'
}

gulp.task('pugRender', function() {
    gulp.src(dirs.pug)
        .pipe(pug())
        .on('error', onError((error) => {
            return {
                title: 'Pug',
                message: error.message
            };
        }))
        .on('error', (error) => {
            console.log(error.toString());
            this.emit('end');
        })
        .pipe(gulp.dest(dirs.dest));
});