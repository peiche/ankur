<?php
/**
 * Title: Quote, Full Width
 * Slug: ankur/quote-full-width
 * Categories: quote
 * Inserter: yes
 *
 * @package Ankur
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|unit","left":"1rem","top":"8rem","bottom":"8rem"}}},"backgroundColor":"contrast-lower"} -->
<div class="wp-block-group has-contrast-lower-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:1rem"><!-- wp:group {"textColor":"contrast-low","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"fontSize":"xxxxl"} -->
<div class="wp-block-group has-contrast-low-color has-text-color has-xxxxl-font-size"><!-- wp:html -->
<svg class="icon" aria-hidden="true" viewBox="0 0 64 64"><polygon fill="currentColor" points="2 36 17 2 26 2 15 36 26 36 26 62 2 62 2 36"></polygon><polygon fill="currentColor" points="38 36 53 2 62 2 51 36 62 36 62 62 38 62 38 36"></polygon></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:quote {"align":"center","className":"is-style-large"} -->
<blockquote class="wp-block-quote has-text-align-center is-style-large"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Your time is limited, so don\'t waste it living someone else\'s life. Don\'t be trapped by dogma – which is living with the results of other people\'s thinking.', 'sample content for quote', 'ankur' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html_x( '— Steve Jobs', 'sample content for citation', 'ankur' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->