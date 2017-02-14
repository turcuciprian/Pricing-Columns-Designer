<?php

add_action('admin_enqueue_scripts', 'ppdEnqueueAdmin');
function ppdEnqueueAdmin(){
  wp_enqueue_style('ppd-angular', plugin_dir_url(__FILE__) . '../js/angular.min.js');
  wp_enqueue_style('rta-jquery-ui', plugin_dir_url(__FILE__) . '../js/script.js',array('ppd-angular'));
  wp_enqueue_style('ppd', plugin_dir_url(__FILE__) . '../style.css');
}
