<?php
/**
 * Partial template used for looping through query results.
 *
 * @author    Themedelight
 * @package   Themedelight/AdventureTours
 * @version   4.2.3
 */

if ( have_posts() ) {

	if ( get_query_var( 'paged' ) < 2 && is_archive() ) { // renders archive page description content for 1-st page
		the_archive_description( '<div class="post-category__description padding-all margin-bottom">', '</div>' );
	}

	while ( have_posts() ) {
		the_post();
		$postType = get_post_type();
		switch ( $postType ) {
		case 'post':
			get_template_part( 'content', get_post_format() );
			break;

		case 'product':
			wc_get_template_part( 'content-product', get_post_format() );
			break;

		default:
			get_template_part( 'content', $postType );
			break;
		}
	}
	if ( ! is_single() ) {
		adventure_tours_render_pagination();
	}
} else {
	get_template_part( 'content', 'none' );
}
