<?php
/**
 * Title: Primary Header
 * Slug: patterns-magazine/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"
	style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">

<!-- wp:pattern {"slug":"patterns-magazine/site-identity"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-advertisement.png" /></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"#f0f0f0","style":"solid","width":"1px"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background" style="border-top-color:#f0f0f0;border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">

				<!-- wp:pattern {"slug":"patterns-magazine/navigation-menu"} /-->

				<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group has-base-color has-text-color has-link-color"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e( 'follow Us :', 'patterns-magazine' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#3e3e3e","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
				<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
				<!-- /wp:social-links --></div>
				<!-- /wp:group -->

			</div>
		<!-- /wp:group -->




	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
