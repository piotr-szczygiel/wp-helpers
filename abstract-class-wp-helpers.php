<?php
// Please note that it's recommended to use the namespaces in your plugins.
// namespace YourCompanyName\PluginNameOrSomething;

/**
 * This class contains a set of methods which can be useful when implementing
 * own WordPress plugins. Class is designed for extending other classes, so all
 * of its methods should be declared as protected (or private in some cases).
 *
 * @author Piotr Szczygiel <psz.szczygiel@gmail.com>
 * @link https://github.com/piotr-szczygiel/wp-helpers - check out latest version
 * @license MIT
 * @version 1.0
 */
abstract class wp_helpers
{
    /**
     * Registering an ajax functions. Method supports both: admin and non-admin 
     * user typing.
     * @param string $name
     * @param array|string $callback
     * @param boolean $admin_only
     */
    protected function register_ajax_function( $name, $callback , $admin_only = true )
    {
        add_action( 'wp_ajax_' . $name, $callback );
        if ( $admin_only === false ) {
            add_action( 'wp_ajax_nopriv_' . $name, $callback );
        }
    }    
}
