<?php
/**
 * Title: Section Title 1
 * Slug: patterns-magazine/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|tertiary","style":"solid","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Latest Stories', 'patterns-magazine' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View More', 'patterns-magazine' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
