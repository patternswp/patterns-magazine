<?php
/**
 * Title: Featured Section 6
 * Slug: patterns-magazine/featured-section-6
 * Categories: query, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|tertiary","style":"solid","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"
		style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e( 'Recommended', 'patterns-magazine' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View More', 'patterns-magazine' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":14,"query":{"perPage":12,"pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"","style":{"border":{"radius":"15px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":24,"isLink":true,"style":{"border":{"radius":"50px"}}} /-->

<!-- wp:post-author-name {"isLink":true,"fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"displayType":"modified","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->
