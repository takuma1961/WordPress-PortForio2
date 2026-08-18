<?php

/**
 * Template Name: Demo: Corporate Site
 *
 * Demo page reproducing a Japanese corporate-site layout inspired by major food companies.
 * Content is sample/fictional.
 *
 * @package Understrap
 */

defined('ABSPATH') || exit;

get_header();
?>

<style>
	.dc-wrap * {
		box-sizing: border-box;
	}

	.dc-wrap {
		font-family: "Noto Sans JP", "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
		color: #222;
	}

	/* Hero */
	.dc-hero {
		background: linear-gradient(135deg, #003087 0%, #0057b8 100%);
		color: #fff;
		padding: 100px 20px 80px;
		text-align: center;
		position: relative;
		overflow: hidden;
	}

	.dc-hero::before {
		content: '';
		position: absolute;
		inset: 0;
		background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
	}

	.dc-hero__inner {
		position: relative;
		max-width: 900px;
		margin: 0 auto;
	}

	.dc-hero__label {
		display: inline-block;
		font-size: 0.75rem;
		letter-spacing: 0.15em;
		border: 1px solid rgba(255, 255, 255, 0.5);
		padding: 4px 16px;
		border-radius: 20px;
		margin-bottom: 20px;
		color: rgba(255, 255, 255, 0.85);
	}

	.dc-hero h1 {
		font-size: clamp(1.8rem, 4vw, 3rem);
		font-weight: 700;
		letter-spacing: 0.05em;
		margin: 0 0 16px;
		line-height: 1.3;
	}

	.dc-hero__sub {
		font-size: 1rem;
		color: rgba(255, 255, 255, 0.8);
		margin: 0 0 32px;
		letter-spacing: 0.05em;
	}

	.dc-hero__btn {
		display: inline-block;
		background: #fff;
		color: #003087;
		padding: 14px 40px;
		border-radius: 4px;
		text-decoration: none;
		font-weight: 700;
		font-size: 0.95rem;
		transition: opacity 0.2s;
	}

	.dc-hero__btn:hover {
		opacity: 0.85;
		color: #003087;
	}

	/* Breadcrumb */
	.dc-breadcrumb {
		background: #f5f7fa;
		border-bottom: 1px solid #e8ecf0;
		padding: 12px 20px;
	}

	.dc-breadcrumb__list {
		max-width: 1100px;
		margin: 0 auto;
		display: flex;
		flex-wrap: wrap;
		list-style: none;
		padding: 0;
		font-size: 0.8rem;
		color: #888;
	}

	.dc-breadcrumb__list li+li::before {
		content: '›';
		margin: 0 8px;
		color: #bbb;
	}

	.dc-breadcrumb__list a {
		color: #0057b8;
		text-decoration: none;
	}

	.dc-breadcrumb__list a:hover {
		text-decoration: underline;
	}

	/* Section */
	.dc-section {
		padding: 80px 20px;
	}

	.dc-section--gray {
		background: #f5f7fa;
	}

	.dc-section__inner {
		max-width: 1100px;
		margin: 0 auto;
	}

	.dc-section__head {
		margin-bottom: 48px;
	}

	.dc-section__head h2 {
		font-size: 1.6rem;
		font-weight: 700;
		color: #003087;
		margin: 0 0 8px;
		padding-bottom: 16px;
		border-bottom: 2px solid #003087;
		display: flex;
		align-items: center;
		gap: 12px;
	}

	.dc-section__head h2::before {
		content: '';
		display: inline-block;
		width: 6px;
		height: 24px;
		background: #0057b8;
		border-radius: 3px;
		flex-shrink: 0;
	}

	.dc-section__lead {
		color: #555;
		font-size: 0.95rem;
		line-height: 1.8;
		margin: 12px 0 0;
	}

	/* Company Overview Table */
	.dc-table {
		width: 100%;
		border-collapse: collapse;
		font-size: 0.9rem;
	}

	.dc-table tr {
		border-bottom: 1px solid #e8ecf0;
	}

	.dc-table th {
		width: 200px;
		padding: 20px 24px;
		background: #f5f7fa;
		color: #003087;
		font-weight: 600;
		text-align: left;
		vertical-align: top;
		white-space: nowrap;
	}

	.dc-table td {
		padding: 20px 24px;
		color: #333;
		line-height: 1.7;
		vertical-align: top;
	}

	/* Business Cards */
	.dc-cards {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
		gap: 24px;
	}

	.dc-card {
		background: #fff;
		border-radius: 8px;
		overflow: hidden;
		box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
		transition: transform 0.2s, box-shadow 0.2s;
	}

	.dc-card:hover {
		transform: translateY(-4px);
		box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
	}

	.dc-card__icon {
		height: 120px;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 3rem;
	}

	.dc-card__body {
		padding: 24px;
	}

	.dc-card__title {
		font-size: 1.05rem;
		font-weight: 700;
		color: #003087;
		margin: 0 0 8px;
	}

	.dc-card__text {
		font-size: 0.875rem;
		color: #666;
		line-height: 1.7;
		margin: 0;
	}

	/* News */
	.dc-news__list {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.dc-news__item {
		display: flex;
		align-items: flex-start;
		gap: 24px;
		padding: 20px 0;
		border-bottom: 1px solid #e8ecf0;
		flex-wrap: wrap;
	}

	.dc-news__date {
		font-size: 0.875rem;
		color: #888;
		white-space: nowrap;
		min-width: 100px;
		padding-top: 2px;
	}

	.dc-news__tag {
		font-size: 0.7rem;
		padding: 3px 10px;
		border-radius: 3px;
		background: #e8f0fb;
		color: #0057b8;
		white-space: nowrap;
		font-weight: 600;
	}

	.dc-news__title {
		font-size: 0.9rem;
		color: #333;
		flex: 1;
		line-height: 1.6;
		min-width: 200px;
	}

	/* CTA */
	.dc-cta {
		background: linear-gradient(135deg, #003087 0%, #0057b8 100%);
		color: #fff;
		text-align: center;
		padding: 80px 20px;
	}

	.dc-cta h2 {
		font-size: 1.6rem;
		font-weight: 700;
		margin: 0 0 12px;
	}

	.dc-cta p {
		color: rgba(255, 255, 255, 0.8);
		margin: 0 0 32px;
		font-size: 0.95rem;
	}

	.dc-cta__btn {
		display: inline-block;
		background: #fff;
		color: #003087;
		padding: 14px 48px;
		border-radius: 4px;
		text-decoration: none;
		font-weight: 700;
		font-size: 0.95rem;
		transition: opacity 0.2s;
	}

	.dc-cta__btn:hover {
		opacity: 0.85;
		color: #003087;
	}

	@media (max-width: 640px) {
		.dc-table th {
			width: 120px;
			padding: 14px 12px;
		}

		.dc-table td {
			padding: 14px 12px;
		}
	}
</style>

<div class="dc-wrap">
	<!-- Sub Navigation -->
	<?php get_template_part( 'global-templates/dc-subnav' ); ?>
	<!-- Hero -->
	<section class="dc-hero">
		<div class="dc-hero__inner">
			<span class="dc-hero__label">CORPORATE INFORMATION</span>
			<h1>御殿場食品株式会社</h1>
			<p class="dc-hero__sub">食を通じて、人々の笑顔をつくる。</p>
		</div>
	</section>

	<!-- Company Overview -->
	<section id="overview" class="dc-section">
		<div class="dc-section__inner">
			<div class="dc-section__head">
				<h2>会社概要</h2>
				<p class="dc-section__lead">御殿場食品株式会社は、1970年の創業以来、食品製造・販売を通じて人々の豊かな食生活に貢献してきました。</p>
			</div>
			<table class="dc-table">
				<tr>
					<th>会社名</th>
					<td>御殿場食品株式会社</td>
				</tr>
				<tr>
					<th>代表取締役</th>
					<td>山田 太郎</td>
				</tr>
				<tr>
					<th>設立</th>
					<td>1970年4月1日</td>
				</tr>
				<tr>
					<th>資本金</th>
					<td>50億円</td>
				</tr>
				<tr>
					<th>従業員数</th>
					<td>2,500名（グループ全体）</td>
				</tr>
				<tr>
					<th>事業内容</th>
					<td>食品の製造・販売、飲料の製造・販売、海外事業</td>
				</tr>
				<tr>
					<th>本社所在地</th>
					<td>〒410-1300 静岡県御殿場市御殿場1-2-3</td>
				</tr>
			</table>
		</div>
	</section>

	<!-- Business -->
	<section id="business" class="dc-section dc-section--gray">
		<div class="dc-section__inner">
			<div class="dc-section__head">
				<h2>事業内容</h2>
				<p class="dc-section__lead">私たちは「食」を中心に、国内外でさまざまな事業を展開しています。</p>
			</div>
			<div class="dc-cards">
				<div class="dc-card">
					<div class="dc-card__icon" style="background:#e8f0fb;">🍜</div>
					<div class="dc-card__body">
						<h3 class="dc-card__title">食品事業</h3>
						<p class="dc-card__text">即席麺・チルド食品・冷凍食品など、幅広いカテゴリで日本の食卓を支えるブランドを展開しています。</p>
					</div>
				</div>
				<div class="dc-card">
					<div class="dc-card__icon" style="background:#e8f5e9;">🥤</div>
					<div class="dc-card__body">
						<h3 class="dc-card__title">飲料事業</h3>
						<p class="dc-card__text">健康志向の高まりに応えた機能性飲料・スポーツドリンクを中心に、国内市場でシェアを拡大中です。</p>
					</div>
				</div>
				<div class="dc-card">
					<div class="dc-card__icon" style="background:#fff3e0;">🌏</div>
					<div class="dc-card__body">
						<h3 class="dc-card__title">海外事業</h3>
						<p class="dc-card__text">アジア・北米を中心に現地法人を展開。各国の食文化に合わせた商品開発で海外売上比率40%を目指します。</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- News -->
	<section id="news" class="dc-section">
		<div class="dc-section__inner">
			<div class="dc-section__head">
				<h2>ニュースリリース</h2>
			</div>
			<ul class="dc-news__list">
				<li class="dc-news__item">
					<span class="dc-news__date">2025.06.15</span>
					<span class="dc-news__tag">IR情報</span>
					<span class="dc-news__title">2025年3月期 決算説明会資料を公開しました</span>
				</li>
				<li class="dc-news__item">
					<span class="dc-news__date">2025.05.20</span>
					<span class="dc-news__tag">新商品</span>
					<span class="dc-news__title">夏季限定「御殿場冷やし中華」シリーズを6月より全国発売</span>
				</li>
				<li class="dc-news__item">
					<span class="dc-news__date">2025.04.01</span>
					<span class="dc-news__tag">サステナビリティ</span>
					<span class="dc-news__title">2030年カーボンニュートラル達成に向けたロードマップを策定</span>
				</li>
				<li class="dc-news__item">
					<span class="dc-news__date">2025.03.10</span>
					<span class="dc-news__tag">お知らせ</span>
					<span class="dc-news__title">本社オフィス移転のお知らせ（2025年5月1日付）</span>
				</li>
			</ul>
		</div>
	</section>

	<!-- Contact -->
	<section id="contact-demo" class="dc-cta">
		<h2>お問い合わせ</h2>
		<p>製品・採用・取材に関するお問い合わせはこちらから</p>
		<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="dc-cta__btn">お問い合わせフォームへ</a>
	</section>

</div>

<?php
get_footer();
