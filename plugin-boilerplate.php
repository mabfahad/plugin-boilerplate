<?php
/*
 * Plugin Name: Fahad Plugin Boilerplate
 * Plugin URI:
 * Description: A boilerplate for creating WordPress plugins.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI:
 * License: GPLv2 or later
 * Text Domain: fa-plugin-boilerplate
 * Domain Path: /languages
 */
if ( ! defined( 'WPINC' ) ) {
    die;
}

class PluginBoilerplate {
    function __construct(){
        add_action( 'plugins_loaded', array( self::class,'pb_load_textdomain' ) );
    }

    private function pb_load_textdomain() {
        load_plugin_textdomain( 'se-mcq', false, plugin_dir_path( __FILE__ ) . "languages/" );
    }
}
new PluginBoilerplate();