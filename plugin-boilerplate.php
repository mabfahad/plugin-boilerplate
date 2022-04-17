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

//Define dirpath
define( 'FA_PLUGIN_BOILERPLATE_DIR', plugin_dir_path( __FILE__ ) );

if (!class_exists('FA_Plugin_Boilerplate')) {
    class FA_Plugin_Boilerplate {
        /**
         * Plugin version.
         *
         * @var string
         */
        const VERSION = '1.0.0';

        /**
         * Instance of this class.
         *
         * @var object
         */
        protected static $instance = null;

        /**
         * Initialize the plugin.
         */
        private function __construct() {
            // Load plugin text domain
            add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
            register_activation_hook( __FILE__, array( $this, 'activate' ) );
            register_deactivation_hook(__FILE__, array( $this, 'deactivate' )  );
        }

        /**
         * Return an instance of this class.
         *
         * @return object A single instance of this class.
         */
        public static function get_instance() {
            // If the single instance hasn't been set, set it now.
            if ( null == self::$instance ) {
                self::$instance = new self;
            }

            return self::$instance;
        }

        /**
         * Load the plugin text domain for translation.
         */
        public function load_plugin_textdomain() {
            load_plugin_textdomain( 'fa-plugin-boilerplate', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
        }

        public function activate() {
            // Do something
        }

        public function deactivate() {
            // Do something
        }

    }

    FA_Plugin_Boilerplate::get_instance();
}