<?php

namespace Nelio_AB_Testing\WooCommerce\Experiment_Library\Product_Experiment;

defined( 'ABSPATH' ) || exit;

use function add_action;
use function add_filter;

function load_alternative( $alternative, $control ) {

	$control_id     = $control['postId'];
	$alternative_id = isset( $alternative['postId'] ) ? $alternative['postId'] : 0;
	if ( $control_id === $alternative_id ) {
		return;
	}//end if

	$alternative = get_post( $alternative_id, ARRAY_A );
	if ( empty( $alternative ) ) {
		return;
	}//end if

	$variation_data = get_post_meta( $alternative_id, '_nab_variation_data', true );
	if ( empty( $variation_data ) || ! is_array( $variation_data ) ) {
		$variation_data = array();
	}//end if

	add_filter(
		'nab_enable_custom_woocommerce_hooks',
		function( $enabled, $product_id ) use ( $control_id ) {
			return $enabled || $product_id === $control_id;
		},
		10,
		2
	);


	add_filter(
		'nab_woocommerce_product_name',
		function( $name, $product_id ) use ( &$alternative, $control_id ) {
			if ( $product_id !== $control_id ) {
				return $name;
			}//end if
			return $alternative['post_title'];
		},
		10,
		2
	);


	add_filter(
		'nab_woocommerce_product_description',
		function( $description, $product_id ) use ( &$alternative, $control_id ) {
			if ( $product_id !== $control_id ) {
				return $description;
			}//end if
			return apply_filters( 'the_content', $alternative['post_content'] );
		},
		10,
		2
	);


	add_filter(
		'nab_woocommerce_product_short_description',
		function( $short_description, $product_id ) use ( &$alternative, $control_id ) {
			if ( $product_id !== $control_id ) {
				return $short_description;
			}//end if
			return wc_format_content( $alternative['post_excerpt'] );
		},
		10,
		2
	);


	add_filter(
		'nab_woocommerce_product_image_id',
		function( $image_id, $product_id ) use ( &$alternative, $control_id ) {
			if ( $product_id !== $control_id ) {
				return $image_id;
			}//end if
			return absint( get_post_meta( $alternative['ID'], '_thumbnail_id', true ) );
		},
		10,
		2
	);


	add_filter(
		'nab_woocommerce_product_gallery_ids',
		function( $image_ids, $product_id ) use ( &$alternative, $control_id ) {
			if ( $product_id !== $control_id ) {
				return $image_ids;
			}//end if
			$image_ids = get_post_meta( $alternative['ID'], '_product_image_gallery', true );
			$image_ids = explode( ',', $image_ids );
			$image_ids = array_map( 'absint', $image_ids );
			return array_values( array_filter( $image_ids ) );
		},
		10,
		2
	);


	if ( empty( $variation_data ) ) {

		add_filter(
			'nab_woocommerce_product_regular_price',
			function( $price, $product_id ) use ( &$alternative, $control_id ) {
				if ( $product_id !== $control_id ) {
					return $price;
				}//end if
				$regular_price = get_post_meta( $alternative['ID'], '_regular_price', true );
				return empty( $regular_price ) ? $price : $regular_price;
			},
			10,
			2
		);

		add_filter(
			'nab_woocommerce_product_sale_price',
			function( $price, $product_id, $regular_price ) use ( &$alternative, $control_id ) {
				if ( $product_id !== $control_id ) {
					return $price;
				}//end if
				$sale_price = get_post_meta( $alternative['ID'], '_sale_price', true );
				return empty( $sale_price ) ? $regular_price : $sale_price;
			},
			10,
			3
		);

	} else {

		add_filter(
			'nab_woocommerce_variation_description',
			function( $short_description, $product_id, $variation_id ) use ( &$variation_data, $control_id ) {
				if ( $product_id !== $control_id ) {
					return $short_description;
				}//end if
				$data = isset( $variation_data[ $variation_id ] ) ? $variation_data[ $variation_id ] : array();
				return isset( $data['description'] ) ? $data['description'] : $short_description;
			},
			10,
			3
		);

		add_filter(
			'nab_woocommerce_variation_image_id',
			function( $image_id, $product_id, $variation_id ) use ( &$variation_data, $control_id ) {
				if ( $product_id !== $control_id ) {
					return $image_id;
				}//end if
				$data = isset( $variation_data[ $variation_id ] ) ? $variation_data[ $variation_id ] : array();
				return isset( $data['imageId'] ) ? $data['imageId'] : $image_id;
			},
			10,
			3
		);

		add_filter(
			'nab_woocommerce_variation_regular_price',
			function( $price, $product_id, $variation_id ) use ( &$variation_data, $control_id ) {
				if ( $product_id !== $control_id ) {
					return $price;
				}//end if
				$data = isset( $variation_data[ $variation_id ] ) ? $variation_data[ $variation_id ] : array();
				return ! empty( $data['regularPrice'] ) ? $data['regularPrice'] : $price;
			},
			10,
			3
		);

		add_filter(
			'nab_woocommerce_variation_sale_price',
			function( $price, $product_id, $regular_price, $variation_id ) use ( &$variation_data, $control_id ) {
				if ( $product_id !== $control_id ) {
					return $price;
				}//end if
				$data = isset( $variation_data[ $variation_id ] ) ? $variation_data[ $variation_id ] : array();
				return ! empty( $data['salePrice'] ) ? $data['salePrice'] : $regular_price;
			},
			10,
			4
		);

	}//end if
}//end load_alternative()
add_action( 'nab_nab/wc-product_load_alternative', __NAMESPACE__ . '\load_alternative', 10, 2 );
