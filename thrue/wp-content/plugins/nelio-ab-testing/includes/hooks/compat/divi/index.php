<?php
/**
 * This file defines hooks to filters and actions to make the plugin compatible with Divi.
 *
 * @package    Nelio_AB_Testing
 * @subpackage Nelio_AB_Testing/includes/experiments/library
 * @since      5.0.4
 */

namespace Nelio_AB_Testing\Compat\Divi;

defined( 'ABSPATH' ) || exit;

require_once dirname( __FILE__ ) . '/load.php';
require_once dirname( __FILE__ ) . '/preview.php';
require_once dirname( __FILE__ ) . '/wordpress.php';

