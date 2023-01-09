<?php
/**
 * ===============================
 * REMOVE JQUERY MIGRATE
 * ===============================
 *
 * @package BEGO
 * @since 1.0.0
 * @version 1.0.0
 */
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');


// /*Completely Remove jQuery From WordPress */
// function delete_jquery() {
//     if (!is_admin()) {
//         wp_deregister_script('jquery');
//         wp_register_script('jquery', false);
//     }
// }
// add_action('init', 'delete_jquery');
