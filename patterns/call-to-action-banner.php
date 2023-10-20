<?php
/**
 * Title: Call to Action Banner
 * Slug: ankur/call-to-action-banner
 * Categories: banner
 * Inserter: yes
 *
 * @package Ankur
 */

?>

<!-- wp:group {"style":{"border":{"radius":"0.5rem"}},"backgroundColor":"bg","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-bg-background-color has-background" style="border-radius:0.5rem"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php echo esc_html_x( 'Banner heading', 'sample content for call to action heading', 'ankur' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'sample content for call to action description', 'ankur' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Download', 'sample content for call to action primary link', 'ankur' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"bg","textColor":"contrast-high"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-high-color has-bg-background-color has-text-color has-background wp-element-button"><?php echo esc_html_x( 'Learn more', 'sample content for call to action image secondary link', 'ankur' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
