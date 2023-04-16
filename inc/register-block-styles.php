<?php
/**
 * Block styles.
 *
 * @package romano
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function romano_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'romano-flat-button',
			'label' => __( 'Flat button', 'romano' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'romano-navigation-button',
			'label' => __( 'Button style', 'romano' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'romano-list-underline',
			'label' => __( 'Underlined list items', 'romano' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'romano-box-shadow',
			'label' => __( 'Box shadow', 'romano' ),
			'inline_style' => '.is-style-romano-box-shadow {  
	   			box-shadow: var(--wp--preset--shadow--natural);
        }'
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'romano-box-shadow',
			'label' => __( 'Box shadow', 'romano' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'romano-box-shadow',
			'label' => __( 'Box shadow', 'romano' ),
		)
	);
}
add_action( 'init', 'romano_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function romano_unregister_block_style() {
	wp_enqueue_script(
		'romano-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		ROMANO_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'romano_unregister_block_style' );
