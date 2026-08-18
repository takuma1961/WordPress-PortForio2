<?php
/**
 * Template Name: Contact Page
 *
 * お問い合わせページ。Contact Form 7 を使用。
 *
 * @package Understrap
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<style>
.contact-wrap * { box-sizing: border-box; }
.contact-wrap {
	font-family: "Noto Sans JP", "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
	color: #222;
}

/* Hero */
.contact-hero {
	background: linear-gradient(135deg, #003087 0%, #0057b8 100%);
	color: #fff;
	text-align: center;
	padding: 80px 20px 60px;
}
.contact-hero h1 {
	font-size: clamp(1.6rem, 3vw, 2.4rem);
	font-weight: 700;
	margin: 0 0 12px;
	letter-spacing: 0.05em;
}
.contact-hero p {
	color: rgba(255,255,255,0.8);
	font-size: 0.95rem;
	margin: 0;
}

/* Breadcrumb */
.contact-breadcrumb {
	background: #f5f7fa;
	border-bottom: 1px solid #e8ecf0;
	padding: 12px 20px;
}
.contact-breadcrumb__list {
	max-width: 900px;
	margin: 0 auto;
	display: flex;
	flex-wrap: wrap;
	list-style: none;
	padding: 0;
	font-size: 0.8rem;
	color: #888;
}
.contact-breadcrumb__list li + li::before { content: '›'; margin: 0 8px; color: #bbb; }
.contact-breadcrumb__list a { color: #0057b8; text-decoration: none; }
.contact-breadcrumb__list a:hover { text-decoration: underline; }

/* Form Section */
.contact-body {
	padding: 80px 20px;
}
.contact-body__inner {
	max-width: 720px;
	margin: 0 auto;
}
.contact-body__lead {
	font-size: 0.95rem;
	color: #555;
	line-height: 1.8;
	margin: 0 0 48px;
	padding-bottom: 32px;
	border-bottom: 1px solid #e8ecf0;
}

/* CF7 Override */
.contact-body .wpcf7 { margin: 0; }
.contact-body .wpcf7-form p { margin: 0 0 24px; }
.contact-body .wpcf7-form label {
	display: block;
	font-size: 0.875rem;
	font-weight: 600;
	color: #003087;
	margin-bottom: 6px;
}
.contact-body .wpcf7-form input[type="text"],
.contact-body .wpcf7-form input[type="email"],
.contact-body .wpcf7-form input[type="tel"],
.contact-body .wpcf7-form textarea {
	width: 100%;
	padding: 12px 16px;
	border: 1px solid #d0d8e4;
	border-radius: 4px;
	font-size: 0.95rem;
	color: #333;
	transition: border-color 0.2s, box-shadow 0.2s;
	outline: none;
	font-family: inherit;
}
.contact-body .wpcf7-form input[type="text"]:focus,
.contact-body .wpcf7-form input[type="email"]:focus,
.contact-body .wpcf7-form input[type="tel"]:focus,
.contact-body .wpcf7-form textarea:focus {
	border-color: #0057b8;
	box-shadow: 0 0 0 3px rgba(0,87,184,0.12);
}
.contact-body .wpcf7-form textarea { min-height: 160px; resize: vertical; }
.contact-body .wpcf7-form input[type="submit"] {
	display: block !important;
	width: 100% !important;
	background: #003087 !important;
	color: #fff !important;
	border: none !important;
	padding: 14px !important;
	border-radius: 4px !important;
	font-size: 0.95rem !important;
	font-weight: 700 !important;
	cursor: pointer !important;
	transition: background 0.2s !important;
	font-family: inherit !important;
	text-align: center !important;
	height: auto !important;
	line-height: 1.5 !important;
}
.contact-body .wpcf7-form input[type="submit"]:hover { background: #0057b8; }
.contact-body .wpcf7-not-valid-tip { font-size: 0.8rem; color: #d32f2f; margin-top: 4px; }
.contact-body .wpcf7-response-output {
	margin: 24px 0 0;
	padding: 14px 20px;
	border-radius: 4px;
	font-size: 0.875rem;
}
</style>

<div class="contact-wrap">

	<!-- Sub Navigation -->
	<?php get_template_part( 'global-templates/dc-subnav' ); ?>

	<!-- Hero -->
	<section class="contact-hero">
		<h1>お問い合わせ</h1>
		<p>製品・採用・取材に関するお問い合わせはこちらから</p>
	</section>

	<!-- Breadcrumb -->
	<nav class="contact-breadcrumb" aria-label="パンくずリスト">
		<ol class="contact-breadcrumb__list">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
			<li>お問い合わせ</li>
		</ol>
	</nav>

	<!-- Form -->
	<section class="contact-body">
		<div class="contact-body__inner">
			<p class="contact-body__lead">
				下記フォームに必要事項をご入力の上、「送信する」ボタンをクリックしてください。<br>
				内容確認後、担当者よりご連絡いたします。<br>
				※ <strong>*</strong> は必須項目です。
			</p>
			<?php echo do_shortcode('[contact-form-7 id="550b6ad" title="コンタクトフォーム 1"]'); ?>
		</div>
	</section>

</div>

<?php
get_footer();
