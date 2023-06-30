<?php
function my_plugin_options_page() {
  // Create the options page HTML markup
?>
  <div class="wrap">
    <h1>My Plugin Settings</h1>
    <form method="post" action="options.php">
      <?php settings_fields('my_plugin_options_group'); ?>
      <?php do_settings_sections('my_plugin_options_page'); ?>
      <?php submit_button(); ?>
    </form>
  </div>
<?php
}

function my_plugin_settings_init() {
  // Register settings
  register_setting('my_plugin_options_group', 'my_plugin_option_name');

  // Add sections and fields
  add_settings_section('my_plugin_options_section', 'General Settings', 'my_plugin_section_callback', 'my_plugin_options_page');
  add_settings_field('my_plugin_option_name', 'Plugin Text', 'my_plugin_option_name_callback', 'my_plugin_options_page', 'my_plugin_options_section');
}

function my_plugin_section_callback() {
  // Section description if needed
}

function my_plugin_option_name_callback() {
  // Output HTML for the field
  $option_value = get_option('my_plugin_option_name');
  echo "<input type='text' name='my_plugin_option_name' value='$option_value' />";
}

add_action('admin_menu', 'my_plugin_add_admin_menu');
add_action('admin_init', 'my_plugin_settings_init');

function my_plugin_add_admin_menu() {
  add_options_page('My Plugin', 'My Plugin', 'manage_options', 'my_plugin_options_page', 'my_plugin_options_page');
}