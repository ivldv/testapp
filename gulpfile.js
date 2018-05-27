var gulp = require('gulp');
var bs = require('browser-sync');
var sass = require('gulp-sass');
var gutil = require( 'gulp-util' );
var concatCss =	require('gulp-concat-css');
var ftp = require( 'vinyl-ftp' );
var autoprefixer = require('gulp-autoprefixer');

gulp.task('serve',['avtopref'], function() {
 bs.init({
  proxy: "diplom/"
 });
	gulp.watch("src/sass/*.sass", ['avtopref']);
	gulp.watch("*.php").on('change', bs.reload);
	gulp.watch("src/img/**/*.png").on('change', bs.reload);
});

gulp.task('sass', function() {
    return gulp.src("src/sass/**/*.sass")
        .pipe(sass())
        .pipe(concatCss("style.css"))
        .pipe(gulp.dest("src/css"))
        .pipe(bs.stream());
});

gulp.task('avtopref',['sass'], () =>
    gulp.src('src/css/*.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest("src/css"))
);

gulp.task('default', ['serve']);

gulp.task( 'deploy', ['avtopref'], function () {

	var conn = ftp.create( {
		host:     'ftp.25amper.ru',
		user:     'ivldv@25amper.ru',
		password: 'Rr1@fe5D2',
		parallel: 1,
		log:      gutil.log
	});

	var globs = [
		'src/**',
		'*.php'
	];

	// using base = '.' will transfer everything to /public_html correctly
	// turn off buffering in gulp.src for best performance

	return gulp.src( globs, { base: '', buffer: false } )
		.pipe( conn.newer( '/just-a-bit/diplom/' ) ) // only upload newer files
		.pipe( conn.dest( '/just-a-bit/diplom/' ) );

} );