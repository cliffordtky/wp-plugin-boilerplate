<?php
/*
Plugin Name: My Plugin Name
Description: Description of my plugin.
Author: My Name
Version: 1.0
*/

register_activation_hook(__FILE__, 'my_plugin_activation_function');
register_deactivation_hook(__FILE__, 'my_plugin_deactivation_function');

function my_plugin_activation_function() {
  // Perform activation tasks here
  // This can be any setup tasks that your plugin should perform when it is activated
}

function my_plugin_deactivation_function() {
  // Perform deactivation tasks here
  // This can be any clean-up task that your plugin can perform once deactivated
}

require_once(plugin_dir_path(__FILE__) . 'admin/options-page.php');
require_once(plugin_dir_path(__FILE__) . 'includes/scripts.php');
require_once(plugin_dir_path(__FILE__) . 'includes/shortcodes.php');