<?php

function my_scripts()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_script('jquery-3.4.1', 'https://code.jquery.com/jquery-3.4.1.min.js', [], '', true);
    wp_enqueue_script('bootstrap-4.4.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['jquery'], '', true);
}

function my_widgets_init()
{
    register_sidebar([
        'name' => 'Footer 1',
        'id' => 'footer_1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ttl">',
        'after_title' => '</h4>',
    ]);
    register_sidebar([
        'name' => 'Footer 2',
        'id' => 'footer_2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ttl">',
        'after_title' => '</h4>',
    ]);
    register_sidebar([
        'name' => 'Footer 3',
        'id' => 'footer_3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ttl">',
        'after_title' => '</h4>',
    ]);
    register_sidebar([
        'name' => 'sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ttl">',
        'after_title' => '</h4>',
    ]);
}
