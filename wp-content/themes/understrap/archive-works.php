<?php
/**
 * The template for displaying the Works (実績) archive.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div style="max-width:1100px; margin:0 auto; padding:60px 20px 80px;">

	<h1 style="font-size:2rem; font-weight:bold; margin-bottom:40px;">実績紹介</h1>

	<?php if ( have_posts() ) : ?>
		<div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(280px, 1fr)); gap:32px;">
			<?php
			while ( have_posts() ) :
				the_post();
				$tech_used = get_post_meta( get_the_ID(), '_works_tech_used', true );
				$year      = get_post_meta( get_the_ID(), '_works_year', true );
				?>
				<a href="<?php the_permalink(); ?>" style="display:block; text-decoration:none; color:inherit; border:1px solid #eee; border-radius:8px; overflow:hidden;">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium', array( 'style' => 'width:100%; height:180px; object-fit:cover; display:block;' ) ); ?>
					<?php else : ?>
						<div style="width:100%; height:180px; background:#eee;"></div>
					<?php endif; ?>
					<div style="padding:16px;">
						<h2 style="font-size:1.1rem; font-weight:bold; margin:0 0 8px;"><?php the_title(); ?></h2>
						<?php if ( $year ) : ?>
							<p style="font-size:0.85rem; color:#888; margin:0 0 8px;"><?php echo esc_html( $year ); ?></p>
						<?php endif; ?>
						<?php if ( $tech_used ) : ?>
							<p style="font-size:0.85rem; color:#444; margin:0;"><?php echo esc_html( $tech_used ); ?></p>
						<?php endif; ?>
					</div>
				</a>
				<?php
			endwhile;
			?>
		</div>
		<?php understrap_pagination(); ?>
	<?php else : ?>
		<p>実績はまだありません。</p>
	<?php endif; ?>

</div>

<?php
get_footer();
