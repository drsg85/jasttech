import gulp from 'gulp';
import wait from 'gulp-wait';
// import browserSync from 'browser-sync';
const browserSync = require('browser-sync').create();

const dirs = {
    pug: './src/pug/**/*.pug',
    scss: './src/scss/**/*.scss',
    js: './src/js/**/*.js',
    php: './src/wp/*.php',
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
    gulp.watch(dirs.scss, ['stylesChanged']);

    // scripts
    gulp.watch(dirs.js, ['jsChanged']);

    // wordpress
    gulp.watch(dirs.php, ['copyPHP']);
});

// pug
gulp.task('pugChanged', ['pugRender'], () => {
    browserSync.reload();
});

// styles
gulp.task('stylesChanged', ['styles', 'copyCSS', 'reloadBrowser']);

gulp.task('reloadBrowser', () => {
    gulp.src(dirs.css)
        .pipe(browserSync.stream());
})

// scripts
gulp.task('jsChanged', ['scripts', 'copyJS'], () => {
    browserSync.reload();
});