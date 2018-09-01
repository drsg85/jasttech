import gulp from 'gulp';
import browserSync from 'browser-sync';

const dirs = {
    pug: './src/pug/**/*.pug',
    scss: './src/scss/**/*.scss',
    css: './dist/styles.css',
    dest: './dist'
}

gulp.task('watch', function() {
    browserSync.init({
        server: dirs.dest,
        // this is needed to move notify popup to bottom, cause it usually overlaps page elements on its default position
        notify: {
            styles: { 
                top: 'auto',
                bottom: 0
            }
        }
    });
    
    // pug
    gulp.watch(dirs.pug, ['pugChanged']);

    // styles
    gulp.watch(dirs.scss, ['stylesChanged'])
});

// pug
gulp.task('pugChanged', ['pugRender'], () => {
    browserSync.reload();
});

// styles
gulp.task('stylesChanged', ['styles'], () => {
    gulp.src(dirs.css)
        .pipe(browserSync.stream());
});