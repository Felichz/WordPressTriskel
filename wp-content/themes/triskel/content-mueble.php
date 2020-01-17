<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	do_action( 'storefront_single_post_top' );

	/**
	 * Functions hooked into storefront_single_post add_action
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_content         - 30
	 */
    
    storefront_post_header();
    
    ///////////////// POST CONTENT /////////////////
    ?>
    <div class="entry-content">
    <?php

    /**
     * Functions hooked in to storefront_post_content_before action.
     *
     * @hooked storefront_post_thumbnail - 10
     */
    $fieldValues = get_post_custom( $post_id );

    echo "<div class=\"curso-label\"><b>Estilo de mueble:</b></div> {$fieldValues['estilo'][0]} <br><br>";

    echo '<a href="' . wp_get_attachment_url( $fieldValues['imagen'][0] ) . '"><img class="mueble-img" src="' . wp_get_attachment_url( $fieldValues['imagen'][0] ) . '"/></a>';

    do_action( 'storefront_post_content_before' );

    the_content(
        sprintf(
            /* translators: %s: post title */
            __( 'Continue reading %s', 'storefront' ),
            '<span class="screen-reader-text">' . get_the_title() . '</span>'
        )
    );
    do_action( 'storefront_post_content_after' );

    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'storefront' ),
            'after'  => '</div>',
        )
    );
    ?>
    </div><!-- .entry-content -->
    
    <?php
    ///////////////// END POST CONTENT /////////////////

	/**
	 * Functions hooked in to storefront_single_post_bottom action
	 *
	 * @hooked storefront_post_nav         - 10
	 * @hooked storefront_display_comments - 20
	 */
	do_action( 'storefront_single_post_bottom' );
	?>

</article><!-- #post-## -->