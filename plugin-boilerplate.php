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
//Define Dirpath for hooks
define( 'DIR_PATH', plugin_dir_path( __FILE__ ) );

if (!class_exists('PluginBoilerplate')) {
    class PluginBoilerplate
    {
        /**
         * PluginBoilerplate constructor.
         */
        public function __construct()
        {
            //Hook into the plugin activation hook
            register_activation_hook( __FILE__, array( $this, 'activate' ) );
            //Hook into the plugin deactivation hook
            register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );
            //Hook into the plugin uninstall hook
            register_uninstall_hook( __FILE__, array( $this, 'uninstall' ) );
            //Hook into the WordPress init action
            add_action( 'init', array( $this, 'init' ) );
        }

        /**
         * Activate the plugin
         */
        public function activate()
        {
            // Do nothing
        }

        /**
         * Deactivate the plugin
         */
        public function deactivate()
        {
            // Do nothing
        }

        /**
         * Uninstall the plugin
         */
        public function uninstall()
        {
            // Do nothing
        }

        /**
         * Initialize the plugin
         */
        public function init()
        {
            // Do nothing
        }
    }
}
new PluginBoilerplate();