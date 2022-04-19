<?php
class Fa_Plugin_Boilerplate_Deactivator {

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
        $this->deactivate();

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
    private function deactivate() {
        $this->delete_plugin_tables(['fa_plugin_boilerplate']);
    }

    private function delete_plugin_tables($table_names = null) {
        //delete plugin tables
        global $wpdb;
        if (is_array($table_names) && !empty($table_names)) {
            foreach ($table_names as $table_name) {
                $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}{$table_name}");
            }
        }
    }

}