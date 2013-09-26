<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/**
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(
    // 'js' => array('//js/file1.js', '//js/file2.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),
    'faustcss' => array(
    	'//stylesheets/base.css',
    	'//stylesheets/skeleton.css',
    	'//stylesheets/fixed-positioning.css',
    	'//stylesheets/animations.css',
    	'//stylesheets/layout.css'
    	),
    'faustjs' => array(
    	'//js/smartpreload.js',
    	'//js/modernizr.custom.js',
    	'//js/jquery.inview.js',
    	'//js/howler.min.js',
    	'//js/sounds.js',
    	'//js/smooth-scroll.js',
    	'//js/jquery.columnizer.js',
    	'//js/main.js',
    	'//js/skrollr.min.js',
    	'//js/skrollr.menu.min.js',
    	'//js/skrollr.ie.min.js'
    	),
);