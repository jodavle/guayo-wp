const gulp = require('gulp');
const sass = require('gulp-sass');
const groupmq = require('gulp-group-css-media-queries');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

sass.compiler = require('node-sass');

gulp.task('styles', () => {
    return gulp.src('src/gridlex.scss')
        .pipe(sass())
        .pipe(gulp.dest('./src/'))
        .pipe(groupmq())
});

gulp.task('js', () => {
    return gulp.src('javascript/*.js', {sourcemap:true})
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest('./'))
});


gulp.task('watch', () => {
    gulp.watch('src/*.scss', gulp.series('styles'));
    gulp.watch('javascript/*.js', gulp.series('js'));
});

gulp.task('default', gulp.parallel('styles', 'js', 'watch'));
