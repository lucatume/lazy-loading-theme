<?php
add_action( 'wp-routes/register_routes', function () {
	respond( 'GET', '/lazy-load-image', function () {
		echo "<img src='{$_REQUEST['url']}'>";
	} );
} );
