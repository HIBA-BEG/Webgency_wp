<?php
/**
 * Loads wp-content/webgency.css.
 *
 * I keep the CSS in that file, not in the Hello Elementor theme and not in
 * the Customizer. The theme gets replaced on update, and the Customizer
 * version only exists in the database, so it would not be in git.
 *
 * Must-use plugins load by themselves. I do not have to activate this one.
 */

add_action( 'wp_head', function () {
	$file = WP_CONTENT_DIR . '/webgency.css';
	if ( ! is_readable( $file ) ) {
		return;
	}

	echo '<style id="webgency-css">' . "\n";
	echo file_get_contents( $file );
	echo "\n</style>\n";
}, 100 );
