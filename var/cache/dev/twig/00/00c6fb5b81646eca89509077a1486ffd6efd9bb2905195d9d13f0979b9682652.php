<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/gulpfile.js */
class __TwigTemplate_47f1ffe109e480c998e7e39ae3028d2cbd6e0a79d280b8fe0e089b5b7fe410d4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gulpfile.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gulpfile.js"));

        // line 1
        echo "'use strict';

var path = require('path');
var ignore = require('gulp-ignore');
var gulp = require('gulp');
var less = require('gulp-less');
var rimraf = require('gulp-rimraf');
//CONFIG PATHS
var config = {
\tassets_dark: 'dark/assets',
  assets_blue: 'blue/assets',
  assets_green: 'green/assets',
  assets_purple: 'purple/assets',
  assets_purple: 'dark_2/assets',
  assets_purple: 'horizontal/assets',
\tbuild: 'css'
};

//TASKS
gulp.task('less-blue',['clean-blue'], function () {
  gulp.src(config.assets_blue + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_blue +'/less/']
    }))
    .pipe(gulp.dest(config.assets_blue + \"/\" + config.build));
});


gulp.task('clean-blue', function(cb){
\t//return rimraf(config.assets_blue + \"/\" + config.build, cb);
\treturn gulp.src(config.assets_blue + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
  \t.pipe(ignore('bootstrap.min.css'))
  \t.pipe(rimraf());
});


// ------------- green ---------------
gulp.task('less-green',['clean-green'], function () {
  gulp.src(config.assets_green + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_green +'/less/']
    }))
    .pipe(gulp.dest(config.assets_green + \"/\" + config.build));
});


gulp.task('clean-green', function(cb){
\treturn gulp.src(config.assets_green + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
  \t.pipe(ignore('bootstrap.min.css'))
  \t.pipe(rimraf());
});

// ------------- dark ---------------
gulp.task('less-dark',['clean-dark'], function () {
  gulp.src(config.assets_dark + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_dark +'/less/']
    }))
    .pipe(gulp.dest(config.assets_dark + \"/\" + config.build));
});


gulp.task('clean-dark', function(cb){
\treturn gulp.src(config.assets_dark + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
  \t.pipe(ignore('bootstrap.min.css'))
  \t.pipe(rimraf());
});


// ------------- purple ---------------
gulp.task('less-purple',['clean-purple'], function () {
  gulp.src(config.assets_purple + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_purple +'/less/']
    }))
    .pipe(gulp.dest(config.assets_purple + \"/\" + config.build));
});


gulp.task('clean-purple', function(cb){
\treturn gulp.src(config.assets_purple + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
  \t.pipe(ignore('bootstrap.min.css'))
  \t.pipe(rimraf());
});

// ------------- dark_2 ---------------
gulp.task('less-dark_2',['clean-dark_2'], function () {
  gulp.src(config.assets_dark_2 + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_dark_2 +'/less/']
    }))
    .pipe(gulp.dest(config.assets_dark_2 + \"/\" + config.build));
});


gulp.task('clean-dark_2', function(cb){
  return gulp.src(config.assets_dark_2 + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
    .pipe(ignore('bootstrap.min.css'))
    .pipe(rimraf());
});

// ------------- Horizontal ---------------
gulp.task('less-horizontal',['clean-horizontal'], function () {
  gulp.src(config.assets_horizontal + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_horizontal +'/less/']
    }))
    .pipe(gulp.dest(config.assets_horizontal + \"/\" + config.build));
});


gulp.task('clean-horizontal', function(cb){
  return gulp.src(config.assets_horizontal + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
    .pipe(ignore('bootstrap.min.css'))
    .pipe(rimraf());
});

gulp.task('default', function() {
 console.log( \"\\nMoltran - Gulp Command List \\n\" );
 console.log( \"----------------------------\\n\" );
 console.log( \"gulp less-dark\" );
 console.log( \"gulp less-blue\" );
 console.log( \"gulp less-green\" );
 console.log( \"gulp less-purple\" );
 console.log( \"gulp less-dark_2\" );
 console.log( \"gulp less-horizontal\" );
 console.log( \"----------------------------\\n\" );
});";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/gulpfile.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';

var path = require('path');
var ignore = require('gulp-ignore');
var gulp = require('gulp');
var less = require('gulp-less');
var rimraf = require('gulp-rimraf');
//CONFIG PATHS
var config = {
\tassets_dark: 'dark/assets',
  assets_blue: 'blue/assets',
  assets_green: 'green/assets',
  assets_purple: 'purple/assets',
  assets_purple: 'dark_2/assets',
  assets_purple: 'horizontal/assets',
\tbuild: 'css'
};

//TASKS
gulp.task('less-blue',['clean-blue'], function () {
  gulp.src(config.assets_blue + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_blue +'/less/']
    }))
    .pipe(gulp.dest(config.assets_blue + \"/\" + config.build));
});


gulp.task('clean-blue', function(cb){
\t//return rimraf(config.assets_blue + \"/\" + config.build, cb);
\treturn gulp.src(config.assets_blue + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
  \t.pipe(ignore('bootstrap.min.css'))
  \t.pipe(rimraf());
});


// ------------- green ---------------
gulp.task('less-green',['clean-green'], function () {
  gulp.src(config.assets_green + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_green +'/less/']
    }))
    .pipe(gulp.dest(config.assets_green + \"/\" + config.build));
});


gulp.task('clean-green', function(cb){
\treturn gulp.src(config.assets_green + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
  \t.pipe(ignore('bootstrap.min.css'))
  \t.pipe(rimraf());
});

// ------------- dark ---------------
gulp.task('less-dark',['clean-dark'], function () {
  gulp.src(config.assets_dark + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_dark +'/less/']
    }))
    .pipe(gulp.dest(config.assets_dark + \"/\" + config.build));
});


gulp.task('clean-dark', function(cb){
\treturn gulp.src(config.assets_dark + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
  \t.pipe(ignore('bootstrap.min.css'))
  \t.pipe(rimraf());
});


// ------------- purple ---------------
gulp.task('less-purple',['clean-purple'], function () {
  gulp.src(config.assets_purple + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_purple +'/less/']
    }))
    .pipe(gulp.dest(config.assets_purple + \"/\" + config.build));
});


gulp.task('clean-purple', function(cb){
\treturn gulp.src(config.assets_purple + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
  \t.pipe(ignore('bootstrap.min.css'))
  \t.pipe(rimraf());
});

// ------------- dark_2 ---------------
gulp.task('less-dark_2',['clean-dark_2'], function () {
  gulp.src(config.assets_dark_2 + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_dark_2 +'/less/']
    }))
    .pipe(gulp.dest(config.assets_dark_2 + \"/\" + config.build));
});


gulp.task('clean-dark_2', function(cb){
  return gulp.src(config.assets_dark_2 + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
    .pipe(ignore('bootstrap.min.css'))
    .pipe(rimraf());
});

// ------------- Horizontal ---------------
gulp.task('less-horizontal',['clean-horizontal'], function () {
  gulp.src(config.assets_horizontal + '/less/**/*.less')
    .pipe(less({
      paths: [config.assets_horizontal +'/less/']
    }))
    .pipe(gulp.dest(config.assets_horizontal + \"/\" + config.build));
});


gulp.task('clean-horizontal', function(cb){
  return gulp.src(config.assets_horizontal + \"/\" + config.build + '/**/*.css', { read: false }) // much faster
    .pipe(ignore('bootstrap.min.css'))
    .pipe(rimraf());
});

gulp.task('default', function() {
 console.log( \"\\nMoltran - Gulp Command List \\n\" );
 console.log( \"----------------------------\\n\" );
 console.log( \"gulp less-dark\" );
 console.log( \"gulp less-blue\" );
 console.log( \"gulp less-green\" );
 console.log( \"gulp less-purple\" );
 console.log( \"gulp less-dark_2\" );
 console.log( \"gulp less-horizontal\" );
 console.log( \"----------------------------\\n\" );
});", "admin/gulpfile.js", "/home/coumba/Bureau/cdiokane/templates/admin/gulpfile.js");
    }
}
