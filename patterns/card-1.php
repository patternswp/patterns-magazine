<?php
/**
 * Title: Card 1
 * Slug: patterns-magazine/card-1
 * Categories: featured
 * Description: A layout featuring an icon, title, and content, commonly used in repeated columns or as a standalone section.
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"15px"},"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:15px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5} -->
<h5 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Long Reads', 'patterns-magazine' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem Ipsum has been the industry’s standard dummy text ever since the ', 'patterns-magazine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} -->
<p class="has-text-align-center has-link-color"><a href="#"><?php esc_html_e( 'Read More', 'patterns-magazine' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
