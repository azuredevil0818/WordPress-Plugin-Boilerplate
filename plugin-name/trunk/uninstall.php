<?php
/**
 * @TEAM: http://make.wordpress.org/core/handbook/inline-documentation-standards/php-documentation-standards/#1-functions-and-class-methods
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}