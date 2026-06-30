<?php
/**
 * The template for displaying a single Work (実績).
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();

	$tech_used = get_post_meta( get_the_ID(), '_works_tech_used', true );
	$year      = get_post_meta( get_the_ID(), '_works_year', true );
	$demo_url  = get_post_meta( get_the_ID(), '_works_demo_url', true );
	?>

	<div style="max-width:800px; margin:0 auto; padding:60px 20px 80px;">

		<h1 style="font-size:2rem; font-weight:bold; margin-bottom:24px;"><?php the_title(); ?></h1>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto; border-radius:8px; margin-bottom:24px;' ) ); ?>
		<?php endif; ?>

		<div style="display:flex; gap:24px; flex-wrap:wrap; margin-bottom:24px; font-size:0.9rem; color:#666;">
			<?php if ( $year ) : ?>
				<span><strong>制作年:</strong> <?php echo esc_html( $year ); ?></span>
			<?php endif; ?>
			<?php if ( $tech_used ) : ?>
				<span><strong>使用技術:</strong> <?php echo esc_html( $tech_used ); ?></span>
			<?php endif; ?>
		</div>

		<div style="margin-bottom:32px; line-height:1.8;">
			<?php the_content(); ?>
		</div>

		<?php if ( $demo_url ) : ?>
			<a href="<?php echo esc_url( $demo_url ); ?>" target="_blank" rel="noopener" style="display:inline-block; background:#222; color:#fff; padding:12px 32px; border-radius:4px; text-decoration:none; font-weight:bold;">
				デモを見る →
			</a>
		<?php endif; ?>

	</div>

	<?php
endwhile;

get_footer();
