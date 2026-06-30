<?php
/**
 * Custom post type, taxonomy and meta fields for the "Works" portfolio section.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Register the "works" custom post type.
 */
function understrap_register_works_post_type() {
	register_post_type(
		'works',
		array(
			'labels'       => array(
				'name'               => 'Works',
				'singular_name'      => 'Work',
				'add_new_item'       => '実績を新規追加',
				'edit_item'          => '実績を編集',
				'all_items'          => '実績一覧',
			),
			'public'       => true,
			'has_archive'  => true,
			'rewrite'      => array( 'slug' => 'works' ),
			'menu_icon'    => 'dashicons-portfolio',
			'supports'     => array( 'title', 'editor', 'thumbnail' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'understrap_register_works_post_type' );

/**
 * Register the "works_category" taxonomy (ジャンル) for the works post type.
 */
function understrap_register_works_taxonomy() {
	register_taxonomy(
		'works_category',
		'works',
		array(
			'labels'       => array(
				'name'          => 'ジャンル',
				'singular_name' => 'ジャンル',
			),
			'public'       => true,
			'hierarchical' => true,
			'rewrite'      => array( 'slug' => 'works-category' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'understrap_register_works_taxonomy' );

/**
 * Add the meta box for work details (使用技術 / 制作年 / デモURL).
 */
function understrap_add_works_meta_box() {
	add_meta_box(
		'understrap_works_details',
		'実績の詳細',
		'understrap_render_works_meta_box',
		'works',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'understrap_add_works_meta_box' );

/**
 * Render the works detail meta box fields.
 *
 * @param WP_Post $post Current post object.
 */
function understrap_render_works_meta_box( $post ) {
	wp_nonce_field( 'understrap_works_meta_box', 'understrap_works_meta_box_nonce' );

	$tech_used = get_post_meta( $post->ID, '_works_tech_used', true );
	$year      = get_post_meta( $post->ID, '_works_year', true );
	$demo_url  = get_post_meta( $post->ID, '_works_demo_url', true );
	?>
	<p>
		<label for="works_tech_used"><strong>使用技術</strong>（例: WordPress, PHP, Bootstrap）</label><br>
		<input type="text" id="works_tech_used" name="works_tech_used" value="<?php echo esc_attr( $tech_used ); ?>" style="width:100%;">
	</p>
	<p>
		<label for="works_year"><strong>制作年</strong></label><br>
		<input type="text" id="works_year" name="works_year" value="<?php echo esc_attr( $year ); ?>" style="width:200px;">
	</p>
	<p>
		<label for="works_demo_url"><strong>デモURL</strong>（サイト内のデモページ、または外部URL）</label><br>
		<input type="url" id="works_demo_url" name="works_demo_url" value="<?php echo esc_url( $demo_url ); ?>" style="width:100%;">
	</p>
	<?php
}

/**
 * Save the works detail meta box fields.
 *
 * @param int $post_id Post ID being saved.
 */
function understrap_save_works_meta_box( $post_id ) {
	if ( ! isset( $_POST['understrap_works_meta_box_nonce'] ) ||
		! wp_verify_nonce( $_POST['understrap_works_meta_box_nonce'], 'understrap_works_meta_box' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( isset( $_POST['works_tech_used'] ) ) {
		update_post_meta( $post_id, '_works_tech_used', sanitize_text_field( wp_unslash( $_POST['works_tech_used'] ) ) );
	}

	if ( isset( $_POST['works_year'] ) ) {
		update_post_meta( $post_id, '_works_year', sanitize_text_field( wp_unslash( $_POST['works_year'] ) ) );
	}

	if ( isset( $_POST['works_demo_url'] ) ) {
		update_post_meta( $post_id, '_works_demo_url', sanitize_url( wp_unslash( $_POST['works_demo_url'] ) ) );
	}
}
add_action( 'save_post_works', 'understrap_save_works_meta_box' );
