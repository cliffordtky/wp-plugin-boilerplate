<?php
function my_plugin_enqueue_scripts() {
  // Enqueue external JavaScript
  wp_enqueue_script('my-plugin-script', 'https://example.com/external.js', array(), '1.0', true);
  
  // Enqueue CSS file
  wp_enqueue_style('my-plugin-style', plugin_dir_url(__FILE__) . 'css/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'my_plugin_enqueue_scripts');