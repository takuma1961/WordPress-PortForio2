<?php
/**
 * Template Name: Demo: Corporate Site
 *
 * Demo page reproducing a typical corporate-site layout (Hero / About / Service)
 * for the Works portfolio section. Content is sample/fictional.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- Hero -->
<section style="background:#1c3d5a; color:#fff; text-align:center; padding:120px 20px;">
	<h1 style="font-size:2.5rem; margin-bottom:16px;">株式会社サンプル</h1>
	<p style="font-size:1.1rem; color:#cdd6e0; margin-bottom:32px;">地域に根差した、信頼の建設パートナー</p>
	<a href="#contact-demo" style="background:#fff; color:#1c3d5a; padding:12px 32px; border-radius:4px; text-decoration:none; font-weight:bold;">お問い合わせ</a>
</section>

<!-- About -->
<section style="padding:80px 20px; max-width:800px; margin:0 auto; text-align:center;">
	<h2 style="font-size:1.8rem; margin-bottom:24px;">About</h2>
	<p style="line-height:1.8;">
		創業以来50年、地域の住宅・施設建設を支えてまいりました。<br>
		確かな技術力と丁寧な対応で、お客様に寄り添ったご提案をいたします。
	</p>
</section>

<!-- Service -->
<section style="background:#f9f9f9; padding:80px 20px;">
	<div style="max-width:1000px; margin:0 auto;">
		<h2 style="font-size:1.8rem; margin-bottom:32px; text-align:center;">Service</h2>
		<div style="display:grid; grid-template-columns:repeat(3,1fr); gap:20px;">
			<div style="background:#fff; border:1px solid #eee; border-radius:8px; padding:24px;">
				<h3 style="font-size:1.1rem; margin-bottom:8px;">新築工事</h3>
				<p style="font-size:0.9rem; color:#666;">住宅・店舗・施設の新築をワンストップで対応</p>
			</div>
			<div style="background:#fff; border:1px solid #eee; border-radius:8px; padding:24px;">
				<h3 style="font-size:1.1rem; margin-bottom:8px;">リフォーム</h3>
				<p style="font-size:0.9rem; color:#666;">水回り・外装・耐震補強など幅広く対応</p>
			</div>
			<div style="background:#fff; border:1px solid #eee; border-radius:8px; padding:24px;">
				<h3 style="font-size:1.1rem; margin-bottom:8px;">メンテナンス</h3>
				<p style="font-size:0.9rem; color:#666;">定期点検・補修で建物を長く守ります</p>
			</div>
		</div>
	</div>
</section>

<!-- Contact -->
<section id="contact-demo" style="padding:80px 20px; max-width:600px; margin:0 auto; text-align:center;">
	<h2 style="font-size:1.8rem; margin-bottom:16px;">Contact</h2>
	<p style="color:#888; margin-bottom:24px;">本デモページはお問い合わせフォーム実装例として、Contact Form 7等を組み込み可能です。</p>
</section>

<?php
get_footer();
