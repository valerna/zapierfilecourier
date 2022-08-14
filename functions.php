<?php

//** Add Admin Notice
function zfc_admin_notice() {
    ?>
    <div class="notice notice-warning is-dismissible">
        <p><?php _e( 'Please take the time to read through the documentation in it's entirety.  It's not complicated at all, however there are several steps/tools required to make this work.', 'text-domain' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'zfc_admin_notice' );

////REGISTER FIELD GROUP
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'Zapier File Courier',
	'title' => 'ZFC File Type',
	'fields' => array (
		array (
			'key' => 'zfc_filetype',
			'label' => 'Sub Title',
			'name' => 'sub_title',
			'type' => 'text',
			'prefix' => '',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		)
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

////REGISTER FIELD GROUP
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'Zapier File Courier',
	'title' => 'ZFC File Name',
	'fields' => array (
		array (
			'key' => 'zfc_filename',
			'label' => 'Sub Title',
			'name' => 'sub_title',
			'type' => 'text',
			'prefix' => '',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		)
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;
