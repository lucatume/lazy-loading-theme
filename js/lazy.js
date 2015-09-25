(function ( $, undefined ) {
	'use strict';

	$( document ).on( 'beforeSend.ic', function ( evt, elt, data, settings, xhr, requestId ) {
		settings.url += '&width=' + elt.width();
	} );

})( jQuery )
