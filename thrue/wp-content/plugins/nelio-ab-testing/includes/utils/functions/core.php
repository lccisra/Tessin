<?php
/**
 * Nelio A/B Testing core functions.
 *
 * @package    Nelio_AB_Testing
 * @subpackage Nelio_AB_Testing/includes/utils/functions
 * @since      5.0.0
 */

/**
 * Returns this site's ID.
 *
 * @return string This site's ID. This option is used for accessing AWS.
 *
 * @since 5.0.0
 */
function nab_get_site_id() {

	return get_option( 'nab_site_id', false );

}//end nab_get_site_id()


/**
 * Returns whether the current request is a test preview render or not.
 *
 * @return boolean whether the current request is a test preview render or not.
 *
 * @since 5.0.16
 */
function nab_is_preview() {

	if ( ! isset( $_GET['nab-preview'] ) ) { // phpcs:ignore
		return false;
	}//end if

	$exp_id  = isset( $_GET['experiment'] ) ? absint( $_GET['experiment'] ) : 0; // phpcs:ignore
	$alt_idx = isset( $_GET['alternative'] ) ? sanitize_text_field( $_GET['alternative'] ) : ''; // phpcs:ignore

	if ( empty( $exp_id ) || ! is_numeric( $alt_idx ) ) {
		return false;
	}//end if

	return true;

}//end nab_is_preview()


/**
 * Returns whether the current request is a heatmap render or not.
 *
 * @return boolean whether the current request is a heatmap render or not.
 *
 * @since 5.0.16
 */
function nab_is_heatmap() {
	return (
		nab_is_preview() &&
		isset( $_GET['nab-heatmap-renderer'] ) // phpcs:ignore
	);
}//end nab_is_heatmap()
