function theme_setup() {
    add_theme_support('post-thumbnails'); // Enable featured images
}
add_action('after_setup_theme', 'theme_setup');