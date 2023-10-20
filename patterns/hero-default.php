<?php
/**
 * Title: Hero, Default
 * Slug: ankur/hero-default
 * Categories: hero
 * Inserter: yes
 *
 * @package Ankur
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:0.5rem"><!-- wp:paragraph {"textColor":"contrast-medium","fontSize":"sm"} -->
<p class="has-contrast-medium-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'This is a label', 'sample content for hero label', 'ankur' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"bottom":"18px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:18px"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="has-text-align-left"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'sample content for hero heading', 'ankur' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam vero aliquam, natus quae architecto hic quod!', 'sample content for hero description', 'ankur' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Download', 'sample content for hero primary link', 'ankur' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-underline"} -->
<div class="wp-block-button is-style-underline is-style-fill"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Learn more', 'sample content for hero secondary link', 'ankur' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
