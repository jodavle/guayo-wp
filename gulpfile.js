const gulp = require('gulp');
const sass = require('gulp-sass');
const groupmq = require('gulp-group-css-media-queries');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const autoprefixer = require('gulp-autoprefixer');
const cssnano = require('gulp-cssnano');
const imagemin = require('gulp-imagemin');

// ... variables
var autoprefixerOptions = {
      browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

sass.compiler = require('node-sass');

gulp.task('styles', () => {
    return gulp.src('src/gridlex.scss')
        .pipe(sass())
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(groupmq())
        .pipe(cssnano())
        .pipe(gulp.dest('./dist/css/'))
});


gulp.task('js', () => {
    return gulp.src(['javascript/anime.min.js','javascript/custom.js', 'node_modules/@fortawesome/fontawesome-free/js/all.js'], {sourcemap:true})
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest('./dist/javascript/'))
});

gulp.task('image', () => {
    return gulp.src('./src/images/*')
            .pipe(imagemin())
            .pipe(gulp.dest('./dist/images/'))
});

gulp.task('watch', () => {
    gulp.watch('src/*.scss', gulp.series('styles'));
    gulp.watch('src/images/*', gulp.series('image'));
    gulp.watch('javascript/*.js', gulp.series('js'));
});

gulp.task('default', gulp.parallel('styles', 'js', 'image', 'watch'));
