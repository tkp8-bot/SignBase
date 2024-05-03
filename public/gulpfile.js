const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const babel = require('gulp-babel');


//sass.compiler = require('dart-sass')


function scssTask(){
    return src('app/scss/style.scss', { sourcemaps: true })
        .pipe(sass())
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(dest('dist', { sourcemaps: '.' }))
}


function jsTask(){
    return src('app/js/script.js', { sourcemaps: true })
    .pipe(babel({ presets: ['@babel/preset-env'] }))    
    .pipe(terser())
    .pipe(dest('dist', { sourcemaps: '.' }))
}


exports.default = series(
    scssTask,
    jsTask,
);

