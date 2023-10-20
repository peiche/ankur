<?php
/**
 * Title: Call to Action Banner with Image
 * Slug: ankur/call-to-action-banner-image
 * Categories: banner
 * Inserter: yes
 *
 * @package Ankur
 */

?>

<!-- wp:group {"style":{"border":{"radius":"0.5rem"}},"backgroundColor":"bg"} -->
<div class="wp-block-group has-bg-background-color has-background" style="border-radius:0.5rem"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-columns" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2><?php echo esc_html_x( 'Banner heading', 'sample content for call to action heading', 'ankur' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'sample content for call to action description', 'ankur' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Download', 'sample content for call to action primary link', 'ankur' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"bg","textColor":"contrast-high"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-high-color has-bg-background-color has-text-color has-background wp-element-button"><?php echo esc_html_x( 'Learn more', 'sample content for call to action secondary link', 'ankur' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
