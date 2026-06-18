<?php
/**
 * Title: Navigation Menu
 * Slug: patterns-magazine/navigation-menu
 * Description: A pattern for displaying the site menu.
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:navigation -->
	<!-- wp:home-link {"label":"<?php echo esc_html_x( 'Home', 'label', 'patterns-magazine' ); ?>"} /-->
	
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-magazine' ); ?>","url":"#"} /-->
	
	<!-- wp:navigation-submenu  {"label":"<?php esc_html_e( 'Layout', 'patterns-magazine' ); ?>","url":"#"} -->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Full width', 'patterns-magazine' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Both sidebar', 'patterns-magazine' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Left sidebar', 'patterns-magazine' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Right sidebar', 'patterns-magazine' ); ?>","url":"#"} /-->
	<!-- /wp:navigation-submenu  -->
	
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-magazine' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-magazine' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->
