<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php if ( is_front_page() ) : ?>
	<style>
		html.is-loading { overflow: hidden; }
		#site-loader {
			position: fixed;
			inset: 0;
			z-index: 9999;
			display: flex;
			align-items: center;
			justify-content: center;
			background: #222;
			transition: opacity 0.6s ease, visibility 0.6s ease;
		}
		#site-loader__logo {
			color: #fff;
			font-size: 1.3rem;
			letter-spacing: 0.05em;
			opacity: 0;
			transform: translateY(10px);
			animation: site-loader-fade-in 0.6s ease 0.1s forwards;
		}
		@keyframes site-loader-fade-in {
			to { opacity: 1; transform: translateY(0); }
		}
		#site-loader.is-loaded {
			opacity: 0;
			visibility: hidden;
			pointer-events: none;
		}
		@media (prefers-reduced-motion: reduce) {
			#site-loader { transition: none; }
			#site-loader__logo { animation: none; opacity: 1; transform: none; }
		}
	</style>
	<?php endif; ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php if ( is_front_page() ) : ?>
<script>document.documentElement.classList.add('is-loading');</script>
<div id="site-loader" aria-hidden="true">
	<div id="site-loader__logo">Takuma's Portfolio</div>
</div>
<?php endif; ?>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar -->
