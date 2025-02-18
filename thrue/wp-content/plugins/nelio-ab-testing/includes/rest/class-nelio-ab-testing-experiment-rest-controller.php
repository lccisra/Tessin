<?php
/**
 * This file contains the class that defines REST API endpoints for
 * experiments.
 *
 * @package    Nelio_AB_Testing
 * @subpackage Nelio_AB_Testing/includes/rest
 * @since      5.0.0
 */

defined( 'ABSPATH' ) || exit;

class Nelio_AB_Testing_Experiment_REST_Controller extends WP_REST_Controller {

	/**
	 * The single instance of this class.
	 *
	 * @since  5.0.0
	 * @var    Nelio_AB_Testing_REST_API
	 */
	protected static $instance;

	/**
	 * Returns the single instance of this class.
	 *
	 * @return Nelio_AB_Testing_Experiment_REST_Controller the single instance of this class.
	 *
	 * @since  5.0.0
	 */
	public static function instance() {

		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}//end if

		return self::$instance;

	}//end instance()

	/**
	 * Hooks into WordPress.
	 *
	 * @since  5.0.0
	 */
	public function init() {

		add_action( 'rest_api_init', array( $this, 'register_routes' ) );

	}//end init()

	/**
	 * Register the routes for the objects of the controller.
	 */
	public function register_routes() {

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment',
			array(
				array(
					'methods'             => WP_REST_Server::CREATABLE,
					'callback'            => array( $this, 'create_experiment' ),
					'permission_callback' => nab_capability_checker( 'edit_nab_experiments' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment/(?P<id>[\d]+)',
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_experiment' ),
					'permission_callback' => nab_capability_checker( 'edit_nab_experiments' ),
					'args'                => array(),
				),
				array(
					'methods'             => WP_REST_Server::EDITABLE,
					'callback'            => array( $this, 'update_experiment' ),
					'permission_callback' => nab_capability_checker( 'edit_nab_experiments' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment/(?P<eid>[\d]+)/has-heatmap-data/(?P<aid>[\S]+)',
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'has_heatmap_data' ),
					'permission_callback' => nab_capability_checker( 'read_nab_results' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment/(?P<id>[\d]+)/start',
			array(
				array(
					'methods'             => WP_REST_Server::EDITABLE,
					'callback'            => array( $this, 'start_experiment' ),
					'permission_callback' => nab_capability_checker( 'start_nab_experiments' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment/(?P<id>[\d]+)/resume',
			array(
				array(
					'methods'             => WP_REST_Server::EDITABLE,
					'callback'            => array( $this, 'resume_experiment' ),
					'permission_callback' => nab_capability_checker( 'resume_nab_experiments' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment/(?P<id>[\d]+)/stop',
			array(
				array(
					'methods'             => WP_REST_Server::EDITABLE,
					'callback'            => array( $this, 'stop_experiment' ),
					'permission_callback' => nab_capability_checker( 'stop_nab_experiments' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment/(?P<id>[\d]+)/pause',
			array(
				array(
					'methods'             => WP_REST_Server::EDITABLE,
					'callback'            => array( $this, 'pause_experiment' ),
					'permission_callback' => nab_capability_checker( 'pause_nab_experiments' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment/(?P<id>[\d]+)/apply/(?P<alternative>[A-Za-z0-9-]+)',
			array(
				array(
					'methods'             => WP_REST_Server::EDITABLE,
					'callback'            => array( $this, 'apply_alternative' ),
					'permission_callback' => nab_capability_checker( 'edit_nab_experiments' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiment/(?P<id>[\d]+)/result',
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_experiment_results' ),
					'permission_callback' => nab_capability_checker( 'read_nab_results' ),
					'args'                => array(),
				),
			)
		);

		register_rest_route(
			nelioab()->rest_namespace,
			'/experiments-running',
			array(
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_running_experiments' ),
					'permission_callback' => nab_capability_checker( 'edit_nab_experiments' ),
					'args'                => array(),
				),
			)
		);

	}//end register_routes()

	/**
	 * Create a new experiment
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 *
	 * @return WP_REST_Response The response
	 */
	public function create_experiment( $request ) {

		$parameters = $request->get_json_params();

		$type = trim( sanitize_text_field( nab_array_get( $parameters, 'type' ) ) );
		if ( empty( $type ) ) {
			return new WP_Error(
				'bad-request',
				_x( 'Unable to create a new test because the test type is missing.', 'text', 'nelio-ab-testing' )
			);
		}//end if

		$experiment = nab_create_experiment( $type );
		if ( is_wp_error( $experiment ) ) {
			return new WP_Error(
				'error',
				_x( 'An unknown error occurred while trying to create the test. Please try again later.', 'user', 'nelio-ab-testing' )
			);
		}//end if

		if ( nab_array_get( $parameters, 'addTestedPostScopeRule' ) ) {
			$rule = array(
				'id'         => nab_uuid(),
				'attributes' => array(
					'type' => 'tested-post',
				),
			);
			$experiment->set_scope( array( $rule ) );
			$experiment->save();
		}//end if

		return new WP_REST_Response( $this->json( $experiment ), 200 );

	}//end create_experiment()

	/**
	 * Retrieves an experiment
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function get_experiment( $request ) {

		$experiment_id = $request['id'];
		$experiment    = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( $experiment, 500 );
		}//end if

		return new WP_REST_Response( $this->json( $experiment ), 200 );

	}//end get_experiment()

	/**
	 * Returns whether an experiment has heatmap data or not.
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function has_heatmap_data( $request ) {
		$site_id        = nab_get_site_id();
		$experiment_id  = $request['eid'];
		$alternative_id = $request['aid'];

		$experiment = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( false, 200 );
		}//end if

		$alt_index = array_search(
			$alternative_id,
			wp_list_pluck( $experiment->get_alternatives(), 'id' )
		);
		if ( false === $alt_index ) {
			return new WP_REST_Response( false, 200 );
		}//end if

		$post_meta    = "_nab_has_heatmap_data_{$alt_index}";
		$heatmap_data = get_post_meta( $experiment_id, $post_meta, true );
		if ( ! empty( $heatmap_data ) ) {
			return 'yes' === $heatmap_data;
		}//end if

		$data = array(
			'method'    => 'GET',
			'timeout'   => apply_filters( 'nab_request_timeout', 30 ),
			'sslverify' => ! nab_does_api_use_proxy(),
			'headers'   => array(
				'Authorization' => 'Bearer ' . nab_generate_api_auth_token(),
				'accept'        => 'application/json',
				'content-type'  => 'application/json',
			),
		);

		$url = nab_get_api_url( "/site/{$site_id}/experiment/{$experiment_id}/clicks", 'wp' );
		$url = $this->add_dates_in_url( $url, $experiment );
		$url = add_query_arg( 'alternative', $alt_index, $url );
		$url = add_query_arg( 'tz', rawurlencode( nab_get_timezone() ), $url );

		$response = wp_remote_request( $url, $data );
		if ( is_wp_error( $response ) ) {
			return new WP_REST_Response( false, 200 );
		}//end if

		$result = json_decode( $response['body'], ARRAY_A );
		$result = ! empty( $result['data'] );
		update_post_meta( $experiment_id, $post_meta, $result ? 'yes' : 'no' );
		return new WP_REST_Response( $result, 200 );
	}//end has_heatmap_data()

	/**
	 * Retrieves the results of an experiment
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function get_experiment_results( $request ) {

		$experiment_id = $request['id'];
		$experiment    = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( $experiment, 500 );
		}//end if

		$were_results_definitive = get_post_meta( $experiment_id, '_nab_are_timeline_results_definitive', true );
		$were_results_definitive = ! empty( $were_results_definitive );
		if ( $were_results_definitive && 'finished' === $experiment->get_status() ) {
			$results = get_post_meta( $experiment_id, '_nab_timeline_results', true );
			return new WP_REST_Response( $results, 200 );
		}//end if

		$response = Nelio_AB_Testing_Experiment_Results::get_experiment_results( $experiment );
		if ( is_wp_error( $response ) ) {
			return $response;
		}//end if

		$new_results = $response->results;
		update_post_meta( $experiment_id, '_nab_timeline_results', $new_results );

		$are_results_definitive = 'finished' === $experiment->get_status();
		if ( $are_results_definitive ) {
			update_post_meta( $experiment_id, '_nab_are_timeline_results_definitive', true );
		} else {
			delete_post_meta( $experiment_id, '_nab_are_timeline_results_definitive' );
		}//end if

		return new WP_REST_Response( $new_results, 200 );

	}//end get_experiment_results()

	/**
	 * Retrieves the collection of running experiments
	 *
	 * @return WP_REST_Response The response
	 */
	public function get_running_experiments() {

		$experiments = nab_get_running_experiments();

		$data = array_map(
			function( $experiment ) {
				return $this->json( $experiment );
			},
			$experiments
		);

		return new WP_REST_Response( $data, 200 );

	}//end get_running_experiments()

	/**
	 * Updates an experiment
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function update_experiment( $request ) {

		$experiment_id = $request['id'];
		$parameters    = $request->get_json_params();

		$experiment = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( $experiment, 500 );
		}//end if

		$experiment->set_name( nab_array_get( $parameters, 'name' ) );
		$experiment->set_description( nab_array_get( $parameters, 'description' ) );
		$experiment->set_status( nab_array_get( $parameters, 'status', 'draft' ) );
		$experiment->set_start_date( nab_array_get( $parameters, 'startDate' ) );
		$experiment->set_end_mode_and_value(
			nab_array_get( $parameters, 'endMode', 'manual' ),
			nab_array_get( $parameters, 'endValue', 0 )
		);

		if ( 'nab/heatmap' !== $experiment->get_type() ) {
			$experiment->set_alternatives( nab_array_get( $parameters, 'alternatives' ), array() );
			$experiment->set_goals( nab_array_get( $parameters, 'goals', array() ) );
			$experiment->set_segments( nab_array_get( $parameters, 'segments', array() ) );
			$experiment->set_scope( nab_array_get( $parameters, 'scope', array() ) );
		} else {
			$experiment->set_tracking_mode( nab_array_get( $parameters, 'trackingMode' ) );
			$experiment->set_tracked_post_id( nab_array_get( $parameters, 'trackedPostId' ) );
			$experiment->set_tracked_post_type( nab_array_get( $parameters, 'trackedPostType' ) );
			$experiment->set_tracked_url( nab_array_get( $parameters, 'trackedUrl' ) );
		}//end if

		$experiment->save();

		$experiment = nab_get_experiment( $experiment_id );
		return new WP_REST_Response( $this->json( $experiment ), 200 );

	}//end update_experiment()

	/**
	 * Start an experiment
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function start_experiment( $request ) {

		$experiment_id = $request['id'];
		$experiment    = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( $experiment, 500 );
		}//end if

		$started = $experiment->start();
		if ( is_wp_error( $started ) ) {
			return new WP_REST_Response( $started, 500 );
		}//end if

		return new WP_REST_Response( $this->json( $experiment ), 200 );

	}//end start_experiment()

	/**
	 * Resumes an experiment
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function resume_experiment( $request ) {

		$experiment_id = $request['id'];
		$experiment    = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( $experiment, 500 );
		}//end if

		$resumed = $experiment->resume();
		if ( is_wp_error( $resumed ) ) {
			return new WP_REST_Response( $resumed, 500 );
		}//end if

		return new WP_REST_Response( $this->json( $experiment ), 200 );

	}//end resume_experiment()

	/**
	 * Stop an experiment
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function stop_experiment( $request ) {

		$experiment_id = $request['id'];
		$experiment    = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( $experiment, 500 );
		}//end if

		$stopped = $experiment->stop();
		if ( is_wp_error( $stopped ) ) {
			return new WP_REST_Response( $stopped, 500 );
		}//end if

		return new WP_REST_Response( $this->json( $experiment ), 200 );

	}//end stop_experiment()

	/**
	 * Pauses an experiment
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function pause_experiment( $request ) {

		$experiment_id = $request['id'];
		$experiment    = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( $experiment, 500 );
		}//end if

		$paused = $experiment->pause();
		if ( is_wp_error( $paused ) ) {
			return new WP_REST_Response( $paused, 500 );
		}//end if

		return new WP_REST_Response( $this->json( $experiment ), 200 );

	}//end pause_experiment()

	/**
	 * Applies the given alternative.
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_REST_Response The response
	 */
	public function apply_alternative( $request ) {

		$experiment_id = $request['id'];
		$experiment    = nab_get_experiment( $experiment_id );
		if ( is_wp_error( $experiment ) ) {
			return new WP_REST_Response( $experiment, 500 );
		}//end if

		$alternative_id = $request['alternative'];
		$result         = $experiment->apply_alternative( $alternative_id );
		if ( is_wp_error( $result ) ) {
			return new WP_REST_Response( $result, 500 );
		}//end if

		return new WP_REST_Response( $this->json( $experiment ), 200 );

	}//end apply_alternative()

	private function add_dates_in_url( $url, $experiment ) {

		$url = add_query_arg( 'start', rawurlencode( $experiment->get_start_date() ), $url );
		if ( 'finished' === $experiment->get_status() ) {
			$url = add_query_arg( 'end', rawurlencode( $experiment->get_end_date() ), $url );
		}//end if

		$url = add_query_arg( 'tz', rawurlencode( nab_get_timezone() ), $url );

		return $url;

	}//end add_dates_in_url()

	private function add_segments_in_url( $url, $experiment ) {

		$segments = $experiment->get_segments();
		$segments = ! empty( $segments ) ? $segments : array();

		$url = add_query_arg( 'segments', count( $segments ), $url );

		return $url;

	}//end add_segments_in_url()

	public function json( $experiment ) {

		$data = array(
			'id'          => $experiment->get_id(),
			'name'        => $experiment->get_name(),
			'description' => $experiment->get_description(),
			'status'      => $experiment->get_status(),
			'type'        => $experiment->get_type(),
			'startDate'   => $experiment->get_start_date(),
			'endDate'     => $experiment->get_end_date(),
			'endMode'     => $experiment->get_end_mode(),
			'endValue'    => $experiment->get_end_value(),
			'links'       => array(
				'preview' => $experiment->get_preview_url(),
				'edit'    => $experiment->get_url(),
			),
		);

		if ( 'nab/heatmap' === $experiment->get_type() ) {
			$data = array_merge(
				$data,
				array(
					'trackingMode'    => $experiment->get_tracking_mode(),
					'trackedPostId'   => $experiment->get_tracked_post_id(),
					'trackedPostType' => $experiment->get_tracked_post_type(),
					'trackedUrl'      => $experiment->get_tracked_url(),
				)
			);

			$data['links']['heatmap'] = $experiment->get_heatmap_url();
			return $data;
		}//end if

		$data['alternatives'] = $experiment->get_alternatives();

		$goals = $experiment->get_goals();
		if ( ! empty( $goals ) ) {
			$data['goals'] = array_map(
				function( $goal ) {
					$actions                   = nab_array_get( $goal, 'conversionActions', array() );
					$actions                   = is_array( $actions ) ? $actions : array();
					$goal['conversionActions'] = array_map(
						function( $action ) {
							if ( 'php-function' === nab_array_get( $action, array( 'scope', 'type' ) ) ) {
								$action['scope'] = array( 'type' => 'php-function' );
							}//end if
							return $action;
						},
						$actions
					);
					return $goal;
				},
				$goals
			);
		}//end if

		if ( 'nab/heatmap' !== $experiment->get_type() ) {
			$segments         = $experiment->get_segments();
			$segments         = ! empty( $segments ) ? $segments : array();
			$data['segments'] = $segments;
		}//end if

		$scope = $experiment->get_scope();
		if ( ! empty( $scope ) ) {
			$data['scope'] = $scope;
		}//end if

		return $data;

	}//end json()

}//end class
