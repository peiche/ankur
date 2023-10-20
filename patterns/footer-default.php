<?php
/**
 * Title: Footer, Default
 * Slug: ankur/footer-default
 * Categories: footer
 * Inserter: yes
 *
 * @package Ankur
 */

?>

<!-- wp:group {"tagName":"footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|component-padding","bottom":"var:preset|spacing|component-padding"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group" style="padding-top:var(--wp--preset--spacing--component-padding);padding-bottom:var(--wp--preset--spacing--component-padding)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:social-links {"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links"></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph -->
<p>
	<?php
		printf(
			/* Translators: WordPress link. */
			esc_html__( 'Proudly powered by %s', 'ankur' ),
			'<a data-type="link" data-id="https://wordpress.org/" href="' . esc_url( __( 'https://wordpress.org', 'ankur' ) ) . '" rel="nofollow">WordPress</a>'
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
