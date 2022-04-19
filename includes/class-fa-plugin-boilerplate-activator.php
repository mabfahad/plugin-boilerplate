<?php

//singleton class
class FA_Plugin_Boilerplate_Activator
{

    /**
     * Instance of this class.
     *
     * @var object
     */
    protected static $instance = null;

    /**
     * Initialize the plugin.
     */
    private function __construct()
    {
        $this->activate();

    }

    /**
     * Return an instance of this class.
     *
     * @return object A single instance of this class.
     */
    public static function get_instance()
    {
        // If the single instance hasn't been set, set it now.
        if (null == self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    private function __clone()
    {
        //do nothing
    }

    private function __wakeup()
    {
        //do nothing
    }

    /**
     * Fired when the plugin is activated.
     *
     */
    private function activate() {
        $this->create_plugin_options();
        $this->create_plugin_tables();
    }


    private function create_plugin_options() {

    }

    private function create_plugin_tables() {
        //create_table
        global $wpdb;
        $table_name = $wpdb->prefix . 'fa_plugin_boilerplate';
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            name tinytext NOT NULL,
            text text NOT NULL,
            url varchar(55) DEFAULT '' NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }
}