<?php

namespace Nelio_AB_Testing\EasyDigitalDownloads\Compat;

defined( 'ABSPATH' ) || exit;

use function add_action;
use function add_filter;
use function EDD;

function maybe_customize_main_script( $settings ) {
	$settings['ajaxUrl'] = admin_url( 'admin-ajax.php' );
	if ( function_exists( 'edd_is_checkout' ) && edd_is_checkout() ) {
		$settings['forceECommerceSessionSync'] = true;
	}//end if

	return $settings;
}//end maybe_customize_main_script()
add_filter( 'nab_main_script_settings', __NAMESPACE__ . '\maybe_customize_main_script' );

function sync_ecommerce_session() {

	if ( ! function_exists( 'EDD' ) ) {
		return;
	}//end if

	if ( empty( WC()->session ) ) {
		return;
	}//end if

	if (
		! isset( $_REQUEST['alternative'] ) || // phpcs:ignore
		! isset( $_REQUEST['expsWithView'] ) || // phpcs:ignore
		! isset( $_REQUEST['uniqueViews'] ) // phpcs:ignore
	) {
		return;
	}//end if

	$alternative = intval( $_REQUEST['alternative'] ); // phpcs:ignore
	$exps_with_view = json_decode( sanitize_text_field( wp_unslash( $_REQUEST['expsWithView'] ) ), ARRAY_A ); // phpcs:ignore
	$unique_views   = json_decode( sanitize_text_field( wp_unslash( $_REQUEST['uniqueViews'] ) ), ARRAY_A ); // phpcs:ignore

	if ( null === $exps_with_view || null === $unique_views ) {
		return;
	}//end if

	EDD()->session->set( 'nab_alternative', $alternative );
	EDD()->session->set( 'nab_experiments_with_page_view', $exps_with_view );
	EDD()->session->set( 'nab_unique_views', $unique_views );

}//end sync_ecommerce_session()
add_action( 'wp_ajax_nab_sync_ecommerce_session', __NAMESPACE__ . '\sync_ecommerce_session' );
add_action( 'wp_ajax_nopriv_nab_sync_ecommerce_session', __NAMESPACE__ . '\sync_ecommerce_session' );
