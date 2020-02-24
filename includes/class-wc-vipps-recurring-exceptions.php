<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WC_Vipps_Recurring_Exception extends Exception {

	/** @var string sanitized/localized error message */
	protected $localized_message;

	public $response_code;
	public $is_idempotent_error = false;

	/**
	 * Setup exception
	 *
	 * @since 4.0.2
	 * @param string $error_message Full response
	 * @param string $localized_message user-friendly translated error message
	 */
	public function __construct( $error_message = '', $localized_message = '' ) {
		$this->localized_message = $localized_message;
		parent::__construct( $error_message );
	}

	/**
	 * Returns the localized message.
	 *
	 * @since 4.0.2
	 * @return string
	 */
	public function getLocalizedMessage(): string {
		return $this->localized_message;
	}
}
