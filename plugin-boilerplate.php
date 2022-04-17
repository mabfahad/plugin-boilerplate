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
        register_activation_hook( __FILE__, array( self::class, 'pb_activate' ) );
    }

    private function pb_load_textdomain() {
        load_plugin_textdomain( 'fa-plugin-boilerplate', false, plugin_dir_path( __FILE__ ) . "languages/" );
    }

    private function pb_activate(){
        // Do something on plugin activation
        require_once plugin_dir_path( __FILE__ ) . 'includes/class-pb-activator.php';
        PluginBoilerplateActivator::activate();
    }
}
new PluginBoilerplate();