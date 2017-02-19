<?php
add_action('admin_enqueue_scripts', 'ppdEnqueueAdmin');
function ppdEnqueueAdmin(){
  wp_enqueue_script('ppdLib', plugin_dir_url(__FILE__) . '../js/lib.min.js');
  wp_enqueue_script('ppdScripts', plugin_dir_url(__FILE__) . '../js/custom.min.js',array('ppdLib'));
  wp_enqueue_style('ppdStyles', plugin_dir_url(__FILE__) . '../css/style.min.css');
}
