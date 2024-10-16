<?php
/*
Plugin Name: Disable auto translation updates
Description: Prevents WordPress from automatically updating translation files in the global languages directory.
Author: Tim Whitlock
Version: 1.0
*/


/**
 * https://developer.wordpress.org/advanced-administration/upgrade/upgrading/#configuration-via-filters
 */
if( function_exists('add_filter') ){ 
    add_filter( 'auto_update_translation', '__return_false' );
}