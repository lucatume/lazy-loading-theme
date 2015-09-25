<?php
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script( 'lazy-js', get_template_directory_uri() . '/js/lazy.js', [ 'jquery' ] );
} );

add_action( 'wp-routes/register_routes', function () {
	respond( 'GET', '/lazy-load-image', function () {
		$width   = filter_var( $_REQUEST['width'], FILTER_SANITIZE_NUMBER_INT );
		$url     = filter_var( $_REQUEST['url'], FILTER_SANITIZE_URL );
		$matches = array();
		preg_match( "~(?<=/)(\\d*)/(\\d*)(?=/)~u", $url, $matches );

		if ( empty( $matches ) ) {
			echo "<img src='{$_REQUEST['url']}'>";

			return;
		}
		$ratio  = $width / $matches[1];
		$height = ceil( $matches[2] * $ratio );
		$url    = str_replace( $matches[1], ceil( $width ), str_replace( $matches[2], $height, $url ) );

		echo "<img src='{$url}'>";
	} );
} );
