<?php
/**
 * Template Name: Self Introduction
 *
 * Portfolio-style self introduction page with hero photo and career history.
 * Set a Featured Image on this page to display the hero photo.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) {
	the_post();
	?>

	<div style="max-width:1100px; margin:0 auto; padding:40px 20px 80px;">

		<!-- SNS Icons -->
		<div style="display:flex; justify-content:flex-end; gap:14px; margin-bottom:24px;">
			<a href="https://x.com/あなたのID" target="_blank" rel="noopener" style="color:#222;">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
					<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L1.254 2.25H8.08l4.253 5.622 5.911-5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
				</svg>
			</a>
			<a href="https://instagram.com/あなたのID" target="_blank" rel="noopener" style="color:#222;">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
					<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
				</svg>
			</a>
		</div>

		<!-- Hero -->
		<div style="display:flex; flex-wrap:wrap-reverse; align-items:center; gap:40px; margin-bottom:64px;">

			<div style="flex:1 1 320px;">
				<?php
				$hero_name      = 'TAKUMA';
				$hero_name_len  = mb_strlen( $hero_name );
				$hero_anim_secs = 1; // 全文字が表示されるまでの合計時間（秒）。
				?>
				<h1 class="hero-name-anim" style="font-size:4rem; font-weight:800; letter-spacing:0.02em; line-height:1; margin:0 0 20px;">
					<?php
					for ( $i = 0; $i < $hero_name_len; $i++ ) {
						$delay = round( ( $i / $hero_name_len ) * $hero_anim_secs, 3 );
						printf(
							'<span style="animation-delay:%ss;">%s</span>',
							esc_attr( $delay ),
							esc_html( mb_substr( $hero_name, $i, 1 ) )
						);
					}
					?>
				</h1>
				<style>
					.hero-name-anim span,
					.hero-tag-anim span {
						display: inline-block;
						opacity: 0;
						transform: translateY(20px);
						animation: hero-name-char-in 0.4s ease forwards;
					}
					@keyframes hero-name-char-in {
						to { opacity: 1; transform: translateY(0); }
					}
					@media (prefers-reduced-motion: reduce) {
						.hero-name-anim span,
						.hero-tag-anim span {
							animation: none;
							opacity: 1;
							transform: none;
						}
					}
					.fade-up-anim {
						opacity: 0;
						transform: translateY(30px);
						animation: fade-up-in 0.5s ease forwards;
					}
					@keyframes fade-up-in {
						to { opacity: 1; transform: translateY(0); }
					}
					@media (prefers-reduced-motion: reduce) {
						.fade-up-anim {
							animation: none;
							opacity: 1;
							transform: none;
						}
					}
				</style>

				<div style="display:flex; align-items:center; gap:16px; flex-wrap:wrap;">
					<?php
					// TAKUMAの最後の文字が表示完了するタイミング（アニメーション時間0.4sを含む）からタグ文言の表示を開始する。
					$tag_start_offset = $hero_anim_secs + 0.4;
					$tag_anim_secs    = 0.8; // タグ文言が全て表示されるまでの時間（秒）。
					$tag_text_lines   = array( 'SYSTEM ENGINEER', 'PORTFOLIO SITE' );
					$tag_total_chars  = 0;
					foreach ( $tag_text_lines as $line ) {
						$tag_total_chars += mb_strlen( $line );
					}
					$tag_char_index = 0;
					// 「SYSTEM ENGINEER / PORTFOLIO SITE」の表示完了直後から、3要素を同時にフェードアップ表示する。
					$fade_up_delay = round( $tag_start_offset + $tag_anim_secs, 3 );
					?>
					<span class="hero-tag-anim" style="border:2px solid #222; padding:8px 12px; font-size:0.7rem; font-weight:bold; line-height:1.4; text-align:center; white-space:nowrap;">
						<?php foreach ( $tag_text_lines as $line_index => $line ) : ?>
							<?php
							$line_len = mb_strlen( $line );
							for ( $i = 0; $i < $line_len; $i++ ) {
								$delay = round( $tag_start_offset + ( $tag_char_index / $tag_total_chars ) * $tag_anim_secs, 3 );
								printf(
									'<span style="animation-delay:%ss;">%s</span>',
									esc_attr( $delay ),
									esc_html( mb_substr( $line, $i, 1 ) )
								);
								$tag_char_index++;
							}
							?>
							<?php if ( 0 === $line_index ) : ?><br><?php endif; ?>
						<?php endforeach; ?>
					</span>
					<p class="fade-up-anim" style="animation-delay:<?php echo esc_attr( $fade_up_delay ); ?>s; margin:0; font-size:1.1rem; font-weight:bold; line-height:1.6;">
						常に最新技術をキャッチアップし、<br>成長を止めないエンジニア
					</p>
				</div>
			</div>

			<div class="fade-up-anim" style="animation-delay:<?php echo esc_attr( $fade_up_delay ); ?>s; flex:1 1 320px; text-align:center;">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large', array( 'style' => 'max-width:100%; height:auto; border-radius:4px;' ) ); ?>
				<?php else : ?>
					<div style="background:#eee; aspect-ratio:4/5; display:flex; align-items:center; justify-content:center; color:#999; border-radius:4px;">
						このページの「アイキャッチ画像」を設定すると、ここに写真が表示されます
					</div>
				<?php endif; ?>
			</div>

		</div>

		<!-- Career -->
		<section class="fade-up-anim" style="animation-delay:<?php echo esc_attr( $fade_up_delay ); ?>s;">
			<h2 style="font-size:1.6rem; font-weight:bold; margin-bottom:32px; border-bottom:3px solid #222; display:inline-block; padding-bottom:6px;">
				これまでの経歴
			</h2>

			<div style="display:grid; grid-template-columns:repeat(2,1fr); gap:32px 48px;">

				<div>
					<h3 style="font-size:1.1rem; font-weight:bold; margin:0 0 4px;">IT企業（システム開発）</h3>
					<p style="color:#888; font-size:0.85rem; margin:0 0 8px;">2022年4月 〜 2023年9月（1年6ヶ月）</p>
					<hr style="border:none; border-top:1px solid #ddd; margin:0 0 12px;">
					<p style="margin:0; font-size:0.9rem; color:#444;">主にJavaを使用した金融系・自治体向けシステムの開発に従事</p>
				</div>

				<div>
					<h3 style="font-size:1.1rem; font-weight:bold; margin:0 0 4px;">IT企業（運用保守）</h3>
					<p style="color:#888; font-size:0.85rem; margin:0 0 8px;">2023年10月 〜 2025年9月（2年）</p>
					<hr style="border:none; border-top:1px solid #ddd; margin:0 0 12px;">
					<p style="margin:0; font-size:0.9rem; color:#444;">開発したシステムの運用保守を担当</p>
				</div>

				<div>
					<h3 style="font-size:1.1rem; font-weight:bold; margin:0 0 4px;">IT企業（システム審査）</h3>
					<p style="color:#888; font-size:0.85rem; margin:0 0 8px;">2025年10月 〜 現在（1年）</p>
					<hr style="border:none; border-top:1px solid #ddd; margin:0 0 12px;">
					<p style="margin:0; font-size:0.9rem; color:#444;">金融システムに関する審査業務を担当</p>
				</div>

			</div>
		</section>

	</div>

	<?php
}

get_footer();
