( function ( $ ) {
	$( document ).ready( function() {
		var label = $( '.portfolio_images_block > span' );

		$( window ).resize( function() {
			$( ".portfolio_images_block" ).each( function () {
				var $gallery = $( this ),
					gallery_wrap_width = $gallery.parent( '.entry' ).width(),
					$gallery_rows = $gallery.find( '.portfolio_images_rows' ),
					$gallery_first_row = $gallery_rows.filter( ':first' ),
					$images = $gallery.find( '.portfolio_images_gallery' ),
					images_in_first_row = $gallery_first_row.find( '.portfolio_images_gallery' ),
					count_images_in_first_row = images_in_first_row.length,
					width_image_block_ = images_in_first_row.outerWidth( true ),
					columns = $gallery.data( 'columns' ),
					count_images = $images.length,
					pre_count_images_in_row = Math.floor( gallery_wrap_width / width_image_block_ ),
					count_images_in_row = ( columns < pre_count_images_in_row ) ? columns : pre_count_images_in_row,
					count_rows = Math.ceil( count_images / count_images_in_row );
				if ( count_images_in_first_row != count_images_in_row && 0 != count_images_in_row ) {

					$gallery.empty();
					$gallery.append( label );

					for( var i = 1; i <= count_rows; i++ ) {
						var $new_row = $( '<div/>', {
							'class' : 'portfolio_images_rows'
						} ),
						$new_images_in_row = $images.splice( 0, count_images_in_row );
						$new_row.append( $new_images_in_row );
						$gallery.append( $new_row );
					}
				}
			} );
		} );
	} );
} )( jQuery );