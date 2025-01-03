<?php

/*
 * Plugin Name:       Chameleon Read More
 * Description:       Add a custom "Text Editor (Expandable)" module that has a "read more" link.
 * Version:           1.0.0
 * Author:            Chameleon
 * Author URI:        https://chameleon.co.uk/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

//  Defines
define( 'CRM_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'CRM_MODULES_URL', plugins_url( '/', __FILE__ ) );

function crm_limit_percentage( $value ) {
    if ( $value < 0 ) {
        return 0;
    } else if ( $value > 100 ) {
        return 100;
    }

    return $value;
}

function crm_load_modules() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'rich-text-expandable/rich-text-expandable.php';
    }
}

add_action( 'init', 'crm_load_modules' );
