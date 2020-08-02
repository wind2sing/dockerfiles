<?php
/*
Plugin Name: Don't encode/decode
Plugin URI: http://yourls.org/
Description: Don't encode/decode submitted URLs
Version: 1.0
Author: Ozh
Author URI: http://ozh.org/
*/

yourls_add_filter( 'encodeURI', 'stewx_no_decode' );
function stewx_no_decode( $decoded, $original ) {
    return $original;
}
?>
