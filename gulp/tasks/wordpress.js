import gulp from 'gulp';
import rename from 'gulp-rename';

const dirs = {
    php: './src/wp/**/*.php',
    css: './dist/styles.css',
    js: './dist/*.js',
    wp: 'G:/xampp/htdocs/jasttech/wp-content/themes/jasttech/'
};

gulp.task('copyPHP', () => {
    return gulp.src(dirs.php)
        .pipe(gulp.dest(dirs.wp));
});

gulp.task('copyCSS', () => {
    return gulp.src(dirs.css)
        .pipe(rename('style.css'))
        .pipe(gulp.dest(dirs.wp));
});

gulp.task('copyJS', () => {
    return gulp.src(dirs.js)
        .pipe(gulp.dest(dirs.wp));
});