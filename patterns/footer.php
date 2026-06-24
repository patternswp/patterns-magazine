<?php
/**
 * Title: Footer
 * Slug: patterns-magazine/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"has-accent-background-color","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-secondary-background-color has-background">


<!-- wp:gallery {"columns":6,"linkTo":"lightbox","align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<figure class="wp-block-gallery alignfull has-nested-images columns-6 is-cropped"><!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" /></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg" /></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"200px","contentSize":"300px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-white.png" style="object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image -->
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->



<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} -->
	<!-- wp:home-link {"label":"<?php echo esc_html_x( 'Home', 'label', 'patterns-magazine' ); ?>"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-magazine' ); ?>","url":"#"} /-->



	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-magazine' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-magazine' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->




</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"border":{"top":{"color":"#ffffff52","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="border-top-color:#ffffff52;border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:pattern {"slug":"patterns-magazine/copyright"} /-->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:pattern {"slug":"patterns-magazine/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
