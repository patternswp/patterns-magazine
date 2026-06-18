<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for getting started notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/Patterns_Magazine_Intro
 */
?>
<div id="patterns-magazine-gsn" class="updated notice-info patterns-magazine-gsn at-pos">
	<button class="patterns-magazine-gsn-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-magazine' ); ?>
	</button>
	<div class="patterns-magazine-gsn-container at-flx at-gap at-p">
		<img class="patterns-magazine-gsn-screenshot at-w" src="<?php echo esc_url( PATTERNS_MAGAZINE_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Magazine', 'patterns-magazine' ); ?>" />
		<div class="patterns-magazine-gsn-notice">
			<h2>
				<?php
				printf(
					/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
					esc_html__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer, please make sure you visit our %2$swelcome page%3$s.', 'patterns-magazine' ),
					'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>',
					'<a href="' . esc_url( menu_page_url( PATTERNS_MAGAZINE_THEME_NAME, false ) ) . '">',
					'</a>'
				);
				?>
			</h2>
			<?php
			$plugin_names = patterns_magazine_get_plugin_names();
			if ( $plugin_names ) {
				?>
				<p>
					<?php
					$plugin_count = count( explode( ', ', $plugin_names ) );
					printf(
						/* translators: %s: singular/plural . */
						esc_html__( 'Clicking the button below will install and activate the following %s:', 'patterns-magazine' ),
						$plugin_count > 1 ? esc_html__( 'plugins', 'patterns-magazine' ) : esc_html__( 'plugin', 'patterns-magazine' )
					);
					echo ' ';
					echo esc_html( $plugin_names );
					?>
				</p>
				<?php
			}
			?>
			<button class="patterns-magazine-btn-primary button button-primary button-hero patterns-magazine-install-plugins">
				<?php esc_html_e( 'Get started with Patterns Magazine', 'patterns-magazine' ); ?>
			</button>
		</div>
	</div>
</div>
