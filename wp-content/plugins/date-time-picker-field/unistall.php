<?php

/**
 * Triggered when plugin is unistalled (deleted)
 */

// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

// delete basic settings
$option_names = array( 'dtpicker', 'dtpicker_advanced' );
foreach ($option_names as $opt) {
	delete_option( $opt );
	delete_site_option( $opt );
}
