<?php
/*
 * Plugin Name: Un petit plugin bonus 😃
 */

add_action('init', 'enqueue_script');
function enqueue_script()
{
    wp_enqueue_script('konami-js', plugins_url('konami.js', __FILE__), ['jquery'], null, true);
    wp_enqueue_script('surprise-js', plugins_url('surprise.js', __FILE__), ['jquery'], null, true);
}
