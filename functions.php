<?php

// Custom Block Arrow Button

register_block_style(
	'core/button',
	array(
		'name'         => 'arrow-button',
		'label'        => __( 'Arrow Button', 'jksn' ),
		'inline_style' => '.wp-block-button.is-style-arrow-button .wp-block-button__link::after {content: url(./wp-content/uploads/2024/09/icon-circle-right.svg); vertical-align: top; margin-left: 1.75rem; display: inline-block; margin-top: 0.1rem; margin-right:-0.5rem; }' 
	)
);


// Loads style.css and extra.css in the front end
function mytheme_extra_style() {
	    wp_enqueue_style('mytheme_main_style', get_stylesheet_uri()); 
     wp_enqueue_style('mytheme_extra_style', get_theme_file_uri('assets/css/extra.css'));
}
add_action( 'wp_enqueue_scripts', 'mytheme_extra_style' );


// Loads style.css in the editor
function dsc_add_editor_style(){
	add_editor_style('assets/css/style.css');
	add_editor_style('assets/css/extra.css');
   }
add_action('after_setup_theme','dsc_add_editor_style');