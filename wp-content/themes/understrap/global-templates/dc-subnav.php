<?php
/**
 * Shared sub navigation for the corporate demo site pages.
 *
 * Include with: get_template_part( 'global-templates/dc-subnav' );
 * Resolves page URLs dynamically so it can be reused on any page
 * (anchors only work as in-page links while on the corporate page itself).
 *
 * @package Understrap
 */

defined( 'ABSPATH' ) || exit;

$dc_is_corporate_page = is_page_template( 'page-demo-corporate.php' );

$dc_corporate_pages = get_posts(
	array(
		'post_type'      => 'page',
		'meta_key'       => '_wp_page_template',
		'meta_value'     => 'page-demo-corporate.php',
		'posts_per_page' => 1,
		'fields'         => 'ids',
	)
);
$dc_corporate_url = ! empty( $dc_corporate_pages ) ? get_permalink( $dc_corporate_pages[0] ) : home_url( '/' );

$dc_contact_pages = get_posts(
	array(
		'post_type'      => 'page',
		'meta_key'       => '_wp_page_template',
		'meta_value'     => 'page-contact.php',
		'posts_per_page' => 1,
		'fields'         => 'ids',
	)
);
$dc_contact_url = ! empty( $dc_contact_pages ) ? get_permalink( $dc_contact_pages[0] ) : home_url( '/contact/' );

$dc_shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
$dc_cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' );

// In-page anchors only work while already on the corporate page; otherwise link back to it.
$dc_anchor_base   = $dc_is_corporate_page ? '' : trailingslashit( $dc_corporate_url );
$dc_contact_href  = $dc_is_corporate_page ? '#contact-demo' : $dc_contact_url;
?>
<style>
	.dc-subnav {
		border-bottom: 2px solid #e8ecf0;
		background: #fff;
		position: sticky;
		top: 0;
		z-index: 100;
	}

	.dc-subnav__list {
		max-width: 1100px;
		margin: 0 auto;
		display: flex;
		list-style: none;
		padding: 0 20px;
		overflow-x: auto;
		scrollbar-width: none;
		-ms-overflow-style: none;
	}

	.dc-subnav__list::-webkit-scrollbar {
		display: none;
	}

	.dc-subnav__list a {
		display: block;
		padding: 16px 24px;
		font-size: 0.875rem;
		color: #555;
		text-decoration: none;
		border-bottom: 3px solid transparent;
		margin-bottom: -2px;
		transition: color 0.2s, border-color 0.2s;
		white-space: nowrap;
	}

	.dc-subnav__list a:hover {
		color: #003087;
		border-bottom-color: #003087;
		font-weight: 600;
	}
</style>

<nav class="dc-subnav" aria-label="企業情報サブメニュー">
	<ul class="dc-subnav__list">
		<li><a href="<?php echo esc_url( $dc_corporate_url ); ?>">ホーム</a></li>
		<li><a href="<?php echo esc_url( $dc_anchor_base . '#overview' ); ?>">会社概要</a></li>
		<li><a href="<?php echo esc_url( $dc_anchor_base . '#business' ); ?>">事業内容</a></li>
		<li><a href="<?php echo esc_url( $dc_anchor_base . '#news' ); ?>">ニュース</a></li>
		<li><a href="<?php echo esc_url( $dc_contact_href ); ?>">お問い合わせ</a></li>
		<li><a href="<?php echo esc_url( $dc_shop_url ); ?>">ショップ</a></li>
		<li><a href="<?php echo esc_url( $dc_cart_url ); ?>">カート</a></li>
	</ul>
</nav>
