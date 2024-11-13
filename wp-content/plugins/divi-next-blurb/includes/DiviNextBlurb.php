<?php

class DNXTBLRB_DiviNextBlurb extends DiviExtension {

	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $gettext_domain = 'dnxtblrb-divi-next-blurb';

	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $name = 'divi-next-blurb';

	/**
	 * The extension's version
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * DNXTBLRB_DiviNextBlurb constructor.
	 *
	 * @param string $name
	 * @param array  $args
	 */
	public function __construct( $name = 'divi-next-blurb', $args = array() ) {
		$this->plugin_dir     = plugin_dir_path( __FILE__ );
		$this->plugin_dir_url = plugin_dir_url( $this->plugin_dir );

		parent::__construct( $name, $args );
	}
}

new DNXTBLRB_DiviNextBlurb;

// enqueue public script
if ( !function_exists( 'dnxt_divinexttexts_enqueue_script_public' ) ) {
	function dnxt_blurb_enqueue_script_public() {

		$src = plugin_dir_url( __FILE__ ) .'.././scripts/vanilla-tilt.min.js';
		wp_enqueue_script( 'dnxtblrb_divinextblurb-public', $src, array('jquery'), null, true );

	}
	add_action( 'wp_enqueue_scripts', 'dnxt_blurb_enqueue_script_public' );
}
