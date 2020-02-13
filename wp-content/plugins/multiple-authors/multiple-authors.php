<?php
/*
Plugin Name:  Multiple Authors Custom
*/

if (!defined('ABSPATH')) {
    die;
}

$multipleAuthors = new MultipleAuthors();

class MultipleAuthors
{
    public function __construct()
    {
        $this->hooks();
    }

    public function hooks()
    {
        if (is_admin()) {
            add_action('add_meta_boxes', [$this, 'add_meta_boxes'], 10, 1);
            add_action('save_post', [$this, 'save_form'], 10, 1);
        }

        add_action('wp_enqueue_scripts', [$this, 'enqueue_style']);
        add_action('init', [$this, 'init_shortcodes']);
    }

    public function add_meta_boxes()
    {
        add_meta_box('multiple-authors-box', __('Auteurs supplémentaires'), [$this, 'display_form'], 'page', 'normal');
        add_meta_box('multiple-authors-box', __('Auteurs supplémentaires'), [$this, 'display_form'], 'post', 'normal');
    }

    public function display_form($post)
    {
        $authors = get_post_meta($post->ID, 'multiple-authors', true);

        echo '
            <label for="multiple-authors">Auteurs supplémentaires</label>
            <input type="text" id="multiple-authors" name="multiple-authors" value="' . esc_html($authors) . '" class="regular-text">
        ';
    }

    public function save_form($post_id)
    {
        if (!isset($_POST['multiple-authors'])) {
            return;
        }

        update_post_meta($post_id, 'multiple-authors', sanitize_text_field($_POST['multiple-authors']));
    }

    public function init_shortcodes()
    {
        add_shortcode('auteurs', [$this, 'display_multiple_authors_shortcode']);
    }

    public function display_multiple_authors_shortcode()
    {
        global $post;
        $authors = get_post_meta($post->ID, 'multiple-authors', true);

        if ($authors) {
            return "<span class='authors'>$authors</span>";
        }

        return '';
    }

    public function enqueue_style()
    {
        wp_enqueue_style('multiple-authors-style', plugins_url('style.css', __FILE__));
    }
}
