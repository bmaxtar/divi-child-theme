<?php

/**
 * Free Divi Child Theme by Mamadou Moctar BA == bmaxtar
 * Github: https://https://github.com/bmaxtar   
 * Functions.php
 * =============================================================================== */

function divichild_enqueue_scripts()
{
   wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
   wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'divichild_enqueue_scripts');


//you can add custom functions below this line:
