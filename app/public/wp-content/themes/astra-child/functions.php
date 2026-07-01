<?php
/**
 * Astra Child Theme functions.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue child theme stylesheet after Astra parent styles.
 */
function astra_child_enqueue_styles() {
	wp_enqueue_style(
		'astra-child-theme-css',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'astra-theme-css' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles', 15 );

/**
 * Inherit WordPress Additional CSS from the parent theme when the child has none.
 */
function astra_child_inherit_parent_custom_css_post_id( $post_id ) {
	if ( $post_id > 0 ) {
		return $post_id;
	}

	$parent_mods = get_option( 'theme_mods_' . get_template(), array() );

	if (
		is_array( $parent_mods )
		&& ! empty( $parent_mods['custom_css_post_id'] )
		&& (int) $parent_mods['custom_css_post_id'] > 0
	) {
		return (int) $parent_mods['custom_css_post_id'];
	}

	return $post_id;
}
add_filter( 'theme_mod_custom_css_post_id', 'astra_child_inherit_parent_custom_css_post_id' );

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'chld_thm_cfg_locale_css' ) ) :
	function chld_thm_cfg_locale_css( $uri ) {
		if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
			$uri = get_template_directory_uri() . '/rtl.css';
		}
		return $uri;
	}
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION
