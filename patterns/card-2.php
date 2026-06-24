<?php
/**
 * Title: Card 2
 * Slug: patterns-magazine/card-2
 * Categories: featured
 * Description: A layout featuring an icon, title, and content, commonly used in repeated columns or as a standalone section.
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"border":{"style":"solid","width":"1px","color":"#dadada","radius":"15px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"quaternary","layout":{"type":"default"}} -->
	<div class="wp-block-group has-border-color has-quaternary-background-color has-background"
		style="border-color:#dadada;border-style:solid;border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">

			<!-- wp:heading {"level":5} -->
			<h5 class="wp-block-heading"><?php esc_html_e( 'Office Address', 'patterns-magazine' ); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"width":"35px","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"35px"},"color":{"duotone":"var:preset|duotone|secondary"}}} -->
				<figure class="wp-block-image size-full is-resized"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:35px" />
				</figure>
				<!-- /wp:image -->



				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'patterns-magazine' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":5} -->
			<h5 class="wp-block-heading"><?php esc_html_e( 'Contact Information', 'patterns-magazine' ); ?></h5>
			<!-- /wp:heading -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"35px","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"35px"},"color":{"duotone":"var:preset|duotone|secondary"}}} -->
					<figure class="wp-block-image size-full is-resized"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:35px" />
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} -->
					<p class="has-text-align-left pwp-txt-dec-non has-link-color"><a href="<?php echo esc_url( 'tel:123456789' ); ?>"><?php esc_html_e( '(+1) 234 567 89', 'patterns-magazine' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"35px","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"35px"},"color":{"duotone":"var:preset|duotone|secondary"}}} -->
					<figure class="wp-block-image size-full is-resized"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:35px" />
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} -->
					<p class="has-text-align-left pwp-txt-dec-non has-link-color"><a href="<?php echo esc_url( 'tel:123456789' ); ?>"><?php esc_html_e( '(+1) 234 567 89', 'patterns-magazine' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"35px","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"35px"},"color":{"duotone":"var:preset|duotone|secondary"}}} -->
					<figure class="wp-block-image size-full is-resized"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-3.png" style="width:35px" />
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} -->
					<p class="has-text-align-left pwp-txt-dec-non has-link-color"><a href="<?php echo esc_url( 'mailto:info@demo.com' ); ?>"><?php esc_html_e( 'info@demo.com', 'patterns-magazine' ); ?></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">

			<!-- wp:heading {"level":5} -->
			<h5 class="wp-block-heading"><?php esc_html_e( 'Feel free to contact us!', 'patterns-magazine' ); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php esc_html_e( 'We want to provide you with a great experience which is why we want to hear from you. Your feedback helps us bring you more of the events you love and the service you expect.', 'patterns-magazine' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
