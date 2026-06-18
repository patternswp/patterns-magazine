<?php
/**
 * Title: Section Title 2
 * Slug: patterns-magazine/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"full","fontSize":"medium"} -->
<h2 class="wp-block-heading alignfull has-medium-font-size"><?php esc_html_e( 'Don\'t Miss Out', 'patterns-magazine' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull"><!-- wp:separator {"align":"full","className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"10%"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator alignfull has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->