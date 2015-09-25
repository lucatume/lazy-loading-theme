<?php
if ( function_exists( 'respond' ) ) {
	respond( 'GET', '/lazy-load-image', function () {
		echo "<img src='{$_REQUEST['url']}'>";
	} );
}
