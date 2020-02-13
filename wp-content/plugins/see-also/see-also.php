<?php
/*
 * Plugin Name: See also Custom
 */

$seeAlso = new SeeAlso();

class SeeAlso
{
    public function __construct()
    {
        $this->hooks();
    }

    public function hooks()
    {
        add_action('init', [$this, 'init_shortcodes']);
    }

    public function init_shortcodes()
    {
        add_shortcode('voiraussi', [$this, 'display_see_also']);
    }

    public function display_see_also($attrs)
    {
        if (!isset($attrs['id']) || empty($attrs['id'])) {
            return '<span class="error">Please enter an id with this shortcode</span>';
        }

        /** @var WP_Post|null $post */
        $post = get_post($attrs['id']);

        if ($post) {
            return sprintf('<a href="%s">Voir aussi : %s</a>', get_permalink($post), $post->post_title);
        }

        return sprintf('<span class="error">No post with id %s found</span>', $attrs['id']);
    }
}
