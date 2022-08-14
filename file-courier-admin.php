// Settings Page: ZapierFileCourier
// Retrieving values: get_option( 'your_field_id' )
class ZapierFileCourier_Settings_Page {

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'zfc_create_settings' ) );
		add_action( 'admin_init', array( $this, 'zfc_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'zfc_setup_fields' ) );
	}

	public function zfc_create_settings() {
		$page_title = 'Zapier File Courier';
		$menu_title = 'Zapier File Courier';
		$capability = 'manage_options';
		$slug = 'ZapierFileCourier';
		$callback = array($this, 'zfc_settings_content');
                $icon = 'dashicons-migrate';
		$position = 2;
		add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
		
	}
    
	public function zfc_settings_content() { ?>
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
		</div> <?php
	}

	public function zfc_setup_sections() {
		add_settings_section( 'ZapierFileCourier_section', 'This plugin facilitates the delivery of automatically generated documents to wordpress orders and displays them in the user's order page as downloadable link buttons via the Zapier, Make, and pdfmonkey services', array(), 'ZapierFileCourier' );
	}

	public function zfc_setup_fields() {
		$fields = array(
                    array(
                        'section' => 'ZapierFileCourier_section',
                        'label' => 'Name of File being delivered',
                        'id' => 'zfc_filename',
                        'desc' => '(eg, Name of Business, Team, etc related to delivered file, specifically/respectively) Use the name you used when adding fields in Advanced Custom Fields',
                        'type' => 'text',
                    ),
        
                    array(
                        'section' => 'ZapierFileCourier_section',
                        'label' => 'Name of File being delivered',
                        'id' => 'zfc_fileurl',
                        'desc' => 'The download URL for the file listed',
                        'type' => 'url',
                    )
		);
		foreach( $fields as $field ){
			add_settings_field( $field['id'], $field['label'], array( $this, 'zfc_field_callback' ), 'ZapierFileCourier', $field['section'], $field );
			register_setting( 'ZapierFileCourier', $field['id'] );
		}
	}
	public function zfc_field_callback( $field ) {
		$value = get_option( $field['id'] );
		$placeholder = '';
		if ( isset($field['placeholder']) ) {
			$placeholder = $field['placeholder'];
		}
		switch ( $field['type'] ) {
            
            
			default:
				printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />',
					$field['id'],
					$field['type'],
					$placeholder,
					$value
				);
		}
		if( isset($field['desc']) ) {
			if( $desc = $field['desc'] ) {
				printf( '<p class="description">%s </p>', $desc );
			}
		}
	}
    
}
new ZapierFileCourier_Settings_Page();
                
?>