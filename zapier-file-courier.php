<?php
/**
 * Plugin Name: Zapier File Courier (ACF Version)
 * Plugin URI: https://amalgam.design/
 * Description: Displays buttons for links pulled from Zapier on Woocommerce orders both Frontend and Backend.
 * Version: 1.1
 * Author: RJ Buchanan
 * Aurthor URI: https://amalgam.design
 */



// DEV NOTES (7.10.22.): 
//  - variables have all been adjusted
//  - labeling has been made dynamic (THIS WILL REQUIRE A BACKEND SETTINGS SCRIPT TO DEFINE (eg, 'LABEL', etc))
//  - still need to verify/test field registration (functions.php)
//  - will also need backend settings to provide argumentative options for conditional field display (if this is too much, ditch it, and implement in later version)<--MIGHT BE DONE
//  - THIS PARTICULAR SCRIPT ONLY DISPLAYS THE VALUES COLLECTED/RECIEVED
//  - Research and build backend admin functions for settings page


add_action( 'woocommerce_order_details_before_order_table', 'zfc_field_display', 10, 1 );

function ipp_field_display($order){
    $zfcf1 = get_post_meta( $order->id, '( $zfc_filename )_1', true );
    $zfcurl1 = get_post_meta( $order->id, '( $zfc_fileurl )_1', true );
    $zfcf2 = get_post_meta( $order->id, '( $zfc_filename )_2', true );
    $zfcurl2 = get_post_meta( $order->id, '( $zfc_fileurl )_2', true );
    $zfcf3 = get_post_meta( $order->id, '( $zfc_filename )_3', true );
    $zfcurl3 = get_post_meta( $order->id, '( $zfc_fileurl )_3', true );
    $zfcf4 = get_post_meta( $order->id, '( $zfc_filename )_4', true );
    $zfcurl4 = get_post_meta( $order->id, '( $zfc_fileurl )_4', true );
    $zfcf5 = get_post_meta( $order->id, '( $zfc_filename )_5', true );
    $zfcurl5 = get_post_meta( $order->id, '( $zfc_fileurl )_5', true );
    $zfcf6 = get_post_meta( $order->id, '( $zfc_filename )_6', true );
    $zfcurl6 = get_post_meta( $order->id, '( $zfc_fileurl )_6', true );
    $zfcf7 = get_post_meta( $order->id, '( $zfc_filename )_7', true );
    $zfcurl7 = get_post_meta( $order->id, '( $zfc_fileurl )_7', true );
    $zfcf8 = get_post_meta( $order->id, '( $zfc_filename )_8', true );
    $zfcurl8 = get_post_meta( $order->id, '( $zfc_fileurl )_8', true );
    $zfcf9 = get_post_meta( $order->id, '( $zfc_filename )_9', true );
    $zfcurl9 = get_post_meta( $order->id, '( $zfc_fileurl )_9', true );
    $zfcf10 = get_post_meta( $order->id, '( $zfc_filename )_10', true );
    $zfcurl10 = get_post_meta( $order->id, '( $zfc_fileurl )_10', true );
    $zfcf11 = get_post_meta( $order->id, '( $zfc_filename )_11', true );
    $zfcurl11 = get_post_meta( $order->id, '( $zfc_fileurl )_11', true );
    
    if( $zfcf1 ): ?>
<h3><?php echo ( $zfcf1 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl1 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf2 ): ?>
<h3><?php echo ( $zfcf2 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl2 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf3 ): ?>
<h3><?php echo ( $zfcf3 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl3 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf4 ): ?>
<h3><?php echo ( $zfcf4 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl4 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf5 ): ?>
<h3><?php echo ( $zfcf5 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl5 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf6 ): ?>
<h3><?php echo ( $zfcf6 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl6 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf7 ): ?>
<h3><?php echo ( $zfcf7 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl7 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf8 ): ?>
<h3><?php echo ( $zfcf8 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl8 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf9 ): ?>
<h3><?php echo ( $zfcf9 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl9 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf10 ): ?>
<h3><?php echo ( $zfcf10 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl10 ); ?>">DOWNLOAD</a>
<?php endif;

    if( $zfcf11 ): ?>
<h3><?php echo ( $zfcf11 ); ?></h3>
<a class="button primary is-outline box-shadow-2 box-shadow-1-hover" target="_blank" href="<?php echo esc_url( $zfcurl11 ); ?>">DOWNLOAD</a>
<?php endif;
    
// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}
    include( plugin_dir_path( __FILE__ ) . 'zapier_file_courier/includes/afc/afc.php');
}
///*** Settings Page Scripting

class ZapierFileCourier_Settings_Page {

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
	}

	public function wph_create_settings() {
		$page_title = 'Zapier File Courier';
		$menu_title = 'Zapier File Courier';
		$capability = 'manage_options';
		$slug = 'ZapierFileCourier';
		$callback = array($this, 'wph_settings_content');
                $icon = 'dashicons-migrate';
		$position = 2;
		add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
		
	}
    
	public function wph_settings_content() { ?>
		<div class="wrap">
			<h1>Zapier File Courier</h1>
			<?php settings_errors(); ?>
			<form method="POST" action="options.php">
				<?php
					settings_fields( 'ZapierFileCourier' );
					do_settings_sections( 'ZapierFileCourier' );
					submit_button();
				?>
			</form>
		</div>
}
	}
}