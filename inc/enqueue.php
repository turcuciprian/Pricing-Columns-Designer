<?php
add_action('admin_enqueue_scripts', 'ppdEnqueueAdmin');
function ppdEnqueueAdmin(){
  wp_enqueue_script('ppdScripts', plugin_dir_url(__FILE__) . '../js/script.min.js');
  wp_enqueue_style('ppdStyles', plugin_dir_url(__FILE__) . '../css/style.min.css');
}
