<?php
/*
* Template - Portfolio post
* Version: 1.4.7
*/
get_header();
$current_theme = get_stylesheet(); ?>
	<div class="wrap">
		<div id="primary" class="content-area">
			<div id="container" class="<?php echo in_array( $current_theme, array( 'twentyfourteen', 'twentytwelve' ) ) ? 'site-content' : ''; ?> site-main">
				<div id="content" class="hentry entry">
					<?php if( 'twentynineteen' != $current_theme ) { ?>
                        <div class="breadcrumbs entry-header<?php echo in_array( $current_theme, array( 'twentytwenty' ) ) ? ' has-text-align-center' : ''; ?>">
                            <?php prtfl_post_template_title(); ?>
                        </div>
					<?php }
					do_action( 'bwsplgns_display_pdf_print_buttons', 'top' );
					/* Display template content */
					prtfl_post_get_content();

					do_action( 'bwsplgns_display_pdf_print_buttons', 'bottom' ); ?>
				</div><!-- #content -->
			</div><!-- #container -->
		</div><!-- .content-area -->
		<?php if( 'twentytwenty' == $current_theme ) {
			get_template_part( 'template-parts/footer-menus-widgets' );
		} elseif( 'twentynineteen' != $current_theme ) {
			get_sidebar();
		} ?>
	</div><!-- .wrap -->
<?php get_footer(); ?>