<?php
function my_plugin_shortcode($atts) {
  // Extract the "text" argument from the shortcode attributes
  $atts = shortcode_atts(array(
    'text' => 'Some Default Text',
  ), $atts);

  // Output JavaScript code with the provided text
  ob_start();
?>
  <script>
    // JavaScript code here
    var text = "<?php echo esc_js($atts['text']); ?>";
    console.log(text);
  </script>
  <p class="my-plugin-para">
    <?php 
        $my_plugin_option = get_option('my_plugin_option_name');
        if ($my_plugin_option != ''){
            // echo the text set in the option
            echo $my_plugin_option;
        }else{
            // echo the default text
            echo $atts['text'];
        }
        
    ?>
  </p>
<?php
  return ob_get_clean();
}

add_shortcode('my_plugin_shortcode', 'my_plugin_shortcode');