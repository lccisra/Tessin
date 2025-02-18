<?php

namespace Nelio_AB_Testing\Compat\Elementor;

defined( 'ABSPATH' ) || exit;

use Elementor\Core\Files\CSS\Post as Post_CSS;

use function add_action;
use function class_exists;

function generate_all_css_files( $experiment ) {

	if ( ! in_array( $experiment->get_type(), array( 'nab/page', 'nab/post', 'nab/custom-post-type' ), true ) ) {
		return;
	}//end if

	$control_id = $experiment->get_tested_element();
	if ( ! get_post_meta( $control_id, '_elementor_edit_mode', true ) ) {
		return;
	}//end if

	$alternatives = $experiment->get_alternatives();
	foreach ( $alternatives as $alternative ) {

		if ( empty( $alternative ) || ! isset( $alternative['attributes'] ) ) {
			continue;
		}//end if

		$post_id = $alternative['attributes']['postId'];
		if ( empty( $post_id ) ) {
			continue;
		}//end if

		$aux = new Post_CSS( $post_id );
		$aux->update();

	}//end foreach

}//end generate_all_css_files()

add_action(
	'plugins_loaded',
	function() {
		if ( ! class_exists( 'Elementor\Core\Files\CSS\Post' ) ) {
			return;
		}//end if
		add_action( 'nab_save_experiment', __NAMESPACE__ . '\generate_all_css_files', 10, 2 );
	}
);
