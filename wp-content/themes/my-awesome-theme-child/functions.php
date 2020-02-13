<?php

add_filter('custom_footer', 'footer_filter');

function footer_filter($footer)
{
    global $post;
    return get_post_meta($post->ID, 'multiple-authors', true) . " $footer";
}
