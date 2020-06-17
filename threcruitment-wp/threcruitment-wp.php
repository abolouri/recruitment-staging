<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: THRecruitment-WP
Description: Portal plugin to manage recruitment candidates, send e-mails, classify CVs (and possibly? run A/B tests)
Author: Ariya Bolouri, Rizbir Khan
Version: 0.0.1
Author URI: https://ariyabolouri.com/
*/

function threc_admin_notice() {
  // this function will add a notice to the admin area
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'threc_admin_notice' );
