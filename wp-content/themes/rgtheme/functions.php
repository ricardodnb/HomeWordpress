<?php
function rg_script_enqueue(){
  wp_enqueue_style('bootstrap_css',get_template_directory_uri(),'/css/bootstrap.min.css');
  wp_enqueue_style('rg_custom',get_template_directory_uri(),'/css/mystyles.css');
  wp_enqueue_script('bootstrap_js',get_template_directory_uri(),'/js/bootstrap.min.js');
  wp_enqueue_script('jquery',get_template_directory_uri(),'/js/jquery-2.1.4.min.js');
}

add_action('wp_enqueue_scripts','rg_script_enqueue');

 ?>
