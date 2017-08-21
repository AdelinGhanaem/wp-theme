<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


define('CSS_ASSETS', get_template_directory_uri() . '/assets/css');
define('JS_ASSETS', get_template_directory_uri() . '/assets/js');

function enque_scripts() {
    
    wp_enqueue_style('bootstrap', CSS_ASSETS . '/bootstrap/bootstrap.css');
    wp_enqueue_style('bootstrap-grid', CSS_ASSETS . '/bootstrap/bootstrap-grid.css');
    wp_enqueue_style('bootstrap-reboot', CSS_ASSETS . '/bootstrap/bootstrap-reboot.css');
    wp_enqueue_style('heroic-feature', CSS_ASSETS . '/heroic-features.css');

    
    wp_enqueue_script('bootstrap',JS_ASSETS.'/bootstrap/bootstrap.js');
}

add_action('wp_enqueue_scripts', 'enque_scripts');

