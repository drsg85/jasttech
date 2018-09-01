import gulp from 'gulp';
import browserSync from 'browser-sync';

const dirs = {
    pug: './src/pug/**/*.pug',
    dest: './dist'
}

gulp.task('watch', function() {
    browserSync.init({
        server: dirs.dest
    });
    
    gulp.watch(dirs.pug, ['pugChanged']);
});

gulp.task('pugChanged', ['pugRender'], () => {
    browserSync.reload();
});