<?php
/**
 * Description: Example mu-plugin loader
 *
 */

//IS_ATOMIC is optional. This prevents the mu-plugin from running in non-WP Cloud environments.
if ( defined( 'IS_ATOMIC' ) && IS_ATOMIC ) { 
	require_once WPMU_PLUGIN_DIR . '/example-mu-plugin-dir/example-mu-plugin.php';
}
