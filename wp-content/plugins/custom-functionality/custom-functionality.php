<?php
/*
Plugin Name: PT + Taxonomies Custom Plugin
Description: Site specific code changes
*/
 
 define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
 include( MY_PLUGIN_PATH . 'includes/custom-post-types.php');
 #include( MY_PLUGIN_PATH . 'includes/custom-taxonomies.php');