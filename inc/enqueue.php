<?php

add_action('admin_enqueue_scripts', 'ppdEnqueueAdmin');
function ppdEnqueueAdmin(){
  wp_enqueue_script('ppd-lib-angular', plugin_dir_url(__FILE__) . '../js/angular.min.js');
  wp_enqueue_script('ppd-custom', plugin_dir_url(__FILE__) . '../js/script.js',array('ppd-lib-angular'));
  wp_enqueue_style('ppd', plugin_dir_url(__FILE__) . '../style.css');
}
