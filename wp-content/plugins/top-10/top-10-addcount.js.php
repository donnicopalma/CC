<?php
//"top-10-addcount.js.php" Add count to database
Header("content-type: application/x-javascript");

// Force a short-init since we just need core WP, not the entire framework stack
define( 'SHORTINIT', true );

// Build the wp-config.php path from a plugin/theme
$wp_config_path = dirname( dirname( dirname( __FILE__ ) ) );
$wp_config_filename = '/wp-load.php';

// Check if the file exists in the root or one level up
if( !file_exists( $wp_config_path . $wp_config_filename ) ) {
    // Just in case the user may have placed wp-config.php one more level up from the root
    $wp_config_filename = dirname( $wp_config_path ) . $wp_config_filename;
}
// Require the wp-config.php file
require( $wp_config_filename );

// Include the now instantiated global $wpdb Class for use
global $wpdb;


// Ajax Increment Counter
tptn_inc_count();
function tptn_inc_count() {
	global $wpdb;
	$table_name = $wpdb->prefix . "top_ten";
	$top_ten_daily = $wpdb->prefix . "top_ten_daily";
	$str = '';
	
	$id = intval($_GET['top_ten_id']);
	$activate_counter = intval($_GET['activate_counter']);
	if($id > 0) {
		if ( (1==$activate_counter) || (11==$activate_counter) ) {
			$tt = $wpdb->query( $wpdb->prepare("INSERT INTO {$table_name} (postnumber, cntaccess) VALUES('%d', '1') ON DUPLICATE KEY UPDATE cntaccess= cntaccess+1 ", $id ) );
			$str .= ($tt === FALSE) ? 'tte' : 'tt'.$tt;
		}
		if ( (10==$activate_counter) || (11==$activate_counter) ) {
			$current_date = gmdate( 'Y-m-d', ( time() + ( get_option( 'gmt_offset' ) * 3600 ) ) );
			$ttd = $wpdb->query( $wpdb->prepare("INSERT INTO {$top_ten_daily} (postnumber, cntaccess, dp_date) VALUES('%d', '1', '%s' ) ON DUPLICATE KEY UPDATE cntaccess= cntaccess+1 ", $id, $current_date ) );
			$str .= ($ttd === FALSE) ? ' ttde' : ' ttd'.$ttd;
		}
	}
	echo '<!-- '.$str.' -->';
}

?>