<?php
/**
 * Title: Footer, Simple
 * Slug: ankur/footer-simple
 * Categories: footer
 * Inserter: yes
 *
 * @package Ankur
 */

?>

<!-- wp:group {"tagName":"footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|component-padding","bottom":"var:preset|spacing|component-padding"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group" style="padding-top:var(--wp--preset--spacing--component-padding);padding-bottom:var(--wp--preset--spacing--component-padding)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">
	<?php
		printf(
			/* Translators: WordPress link. */
			esc_html__( 'Proudly powered by %s', 'ankur' ),
			'<a data-type="link" data-id="https://wordpress.org/" href="' . esc_url( __( 'https://wordpress.org', 'ankur' ) ) . '" rel="nofollow">WordPress</a>'
		);
		?>
</p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group -->
