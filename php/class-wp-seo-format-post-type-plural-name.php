<?php
/**
 * Class file for WP_SEO_Format_Post_Type_Plural_Name.
 *
 * @package WP_SEO
 */

/**
 * Formatting tag for the post type plural name.
 */
class WP_SEO_Format_Post_Type_Plural_Name extends WP_SEO_Formatting_Tag {
	public $tag = '#post_type_plural_name#';

	public function get_description() {
		return __( 'Replaced with the plural form of the name of the post type being viewed.', 'wp-seo' );
	}

	public function get_value() {
		if ( is_singular() ) {
			return get_post_type_object( get_post_type() )->labels->name;
		} elseif ( is_post_type_archive() ) {
			return get_queried_object()->labels->name;
		}

		return false;
	}
}
