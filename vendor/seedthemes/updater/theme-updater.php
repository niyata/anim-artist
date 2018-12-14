<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package plant
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://th.seedthemes.com', // Site where EDD is hosted
		'item_name'      => 'Plant: ธีมอเนกประสงค์', // Name of theme
		'theme_slug'     => 'plant', // Theme slug
		'version'        => '1.3.8', // The current version of this theme
		'author'         => 'SeedThemes', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'plant' ),
		'enter-key'                 => __( 'Enter Plant theme license key. You can find from <a href="https://th.seedthemes.com/account/" target="_blank">Account Page</a>.', 'plant' ),
		'license-key'               => __( 'License Key', 'plant' ),
		'license-action'            => __( 'License Action', 'plant' ),
		'deactivate-license'        => __( 'Deactivate License', 'plant' ),
		'activate-license'          => __( 'Activate License', 'plant' ),
		'status-unknown'            => __( 'License status is unknown.', 'plant' ),
		'renew'                     => __( 'Renew?', 'plant' ),
		'unlimited'                 => __( 'unlimited', 'plant' ),
		'license-key-is-active'     => __( 'License key is active.', 'plant' ),
		'expires%s'                 => __( 'Expires %s.', 'plant' ),
		'expires-never'             => __( 'Lifetime License.', 'plant' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'plant' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'plant' ),
		'license-key-expired'       => __( 'License key has expired.', 'plant' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'plant' ),
		'license-is-inactive'       => __( 'License is inactive.', 'plant' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'plant' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'plant' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'plant' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'plant' ),
		'update-available'          => __( '<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'plant' ),
	)

);
