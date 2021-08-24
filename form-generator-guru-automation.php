<?php
/**
 * Plugin Name: Checode Form Generator
 * Version: 1.0.4
 * Plugin URI: https://github.com/kimlercorey/form-generator
 * Description: Form Generator for wordpress
 * Author: Kimler (KC) Corey
 * Author URI: https://github.com/kimlercorey
 * Requires at least: 4.0
 * Tested up to: 5.0
 *
 * Text Domain: checode-form-generator
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author K Corey
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-form-generator-guru-automation.php';
require_once 'includes/class-form-generator-guru-automation-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-form-generator-guru-automation-admin-api.php';
require_once 'includes/lib/class-form-generator-guru-automation-post-type.php';
require_once 'includes/lib/class-form-generator-guru-automation-taxonomy.php';

/**
 * Returns the main instance of Form_Generator_Guru_Automation to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Form_Generator_Guru_Automation
 */
function form_generator_guru_automation() {
	$instance = Form_Generator_Guru_Automation::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Form_Generator_Guru_Automation_Settings::instance( $instance );
	}

	return $instance;
}

form_generator_guru_automation();
