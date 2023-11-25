<?php
/*
Template Name: Portfolio template
* Version: 1.4.7
*/
get_header();
$current_theme = get_stylesheet(); ?>
	<div class="wrap">
		<div id="primary" class="content-area">
			<div id="container" class="<?php echo in_array( $current_theme, array( 'twentyfourteen', 'twentytwelve' ) ) ? 'site-content' : ''; ?> site-main">
				<div id="content" class="hentry entry">
					<div class="entry-header<?php echo in_array( $current_theme, array( 'twentytwenty' ) ) ? ' has-text-align-center' : ''; ?>">
						<?php prtfl_template_title(); ?>
					</div>
                    <div class="portfolio_box entry-content">
                        <?php do_action( 'bwsplgns_display_pdf_print_buttons', 'top' );

                        /* Get arguments for WP Query */
                        $args = prtfl_get_query_args();

                        $second_query = new WP_Query( $args );

                        /* Display template content */
                        prtfl_get_content( $second_query );

                        wp_reset_query();

                        do_action( 'bwsplgns_display_pdf_print_buttons', 'bottom' ); ?>

                        <!-- Portfolio tmplate pagination -->
                        <?php prtfl_pro_pagination( $second_query, $args ); ?>
                    </div><!--.portfolio_box-->
                </div><!-- #content -->
				<?php comments_template(); ?>
			</div><!-- #container -->
		</div><!-- .content-area -->
		<?php if( 'twentytwenty' == $current_theme ) {
			get_template_part( 'template-parts/footer-menus-widgets' );
		} elseif( 'twentynineteen' != $current_theme ) {
			get_sidebar();
		} ?>
	</div><!-- .wrap -->
<?php get_footer(); ?>