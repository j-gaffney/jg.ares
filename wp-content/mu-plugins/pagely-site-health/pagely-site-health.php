<?php
/*
Plugin Name: Pagely Site Health
Plugin URI: https://pagely.com
Description: Fixes for managed WordPress core warnings in site health
Version: 0.1
Author: Pagely
Author URI: https://pagely.com
License: GPL
*/

function pagely_remove_background_update_check( $tests ) {
    unset( $tests['async']['background_updates'] );
    return $tests;
}
add_filter( 'site_status_tests', 'pagely_remove_background_update_check' );
