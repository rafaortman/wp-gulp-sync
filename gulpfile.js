var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('browser-sync', function(){
    var files = [
        './styles.css',
        './*.php'
    ];

    browserSync.init(files, {
        proxy: 'localhost/wordpress2',
        notify: false
    });
});

gulp.task('sass', function(){
    return  gulp.src('sass/*.scss')
            .pipe(sass().on('error', sass.logError))
            .pipe(autoprefixer())
            .pipe(gulp.dest('./'))
            .pipe(reload({stream:true}));
});

gulp.task('default', ['sass', 'browser-sync'], function(){
    gulp.watch('sass/**/*.scss', [sass]);
});