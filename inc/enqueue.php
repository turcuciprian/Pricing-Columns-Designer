<?php

add_action('admin_enqueue_scripts', 'ppdEnqueueAdmin');
function ppdEnqueueAdmin(){
  // wp_enqueue_style('rta-jquery-ui', plugin_dir_url(__FILE__) . 'jquery-ui.min.css');
  wp_enqueue_style('ppd', plugin_dir_url(__FILE__) . 'style.css');
}
