<?php

// Loads style.css and extra.css in the front end
function mytheme_extra_style() {
	    wp_enqueue_style('mytheme_main_style', get_stylesheet_uri()); 
     wp_enqueue_style('mytheme_extra_style', get_theme_file_uri('/assets/css/extra.css'));
}
add_action( 'wp_enqueue_scripts', 'mytheme_extra_style' );


// Loads style.css in the editor
function dsc_add_editor_style(){
	add_editor_style('/style.css');
	add_editor_style('/assets/css/extra.css');
   }
add_action('after_setup_theme','dsc_add_editor_style');

// Load all blocks styles

function dsc_block_styles() {
	// Cover Hover
	register_block_style(
		'core/cover',
		[
			'name'         => 'dsc-cover-hover',
			'label'        => 'DSC Cover Hover',
			'inline_style' => '
				.is-style-dsc-cover-hover {
					position: relative;
				}
				.is-style-dsc-cover-hover img {
					transition: all 300ms ease;
					opacity: 1;
				}
				.is-style-dsc-cover-hover:focus-within img,
				.is-style-dsc-cover-hover:hover img {
					transform: scale(1.2);
					opacity: 0;
				}	
				.is-style-dsc-cover-hover a::after {
				content:" ";
				position: absolute;
				cursor: pointer;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				}
		}
			'
		]
	);
	// Arrow Button
	register_block_style(
		'core/button',
		array(
			'name'         => 'dsc-arrow-button',
			'label'        => 'DSC Arrow Button' ,
			'inline_style' => '.wp-block-button.is-style-arrow-button .wp-block-button__link::after {content: url(/wp-content/uploads/2024/09/icon-circle-right.svg); vertical-align: top; margin-left: 1.75rem; display: inline-block; margin-top: 0.1rem; margin-right:-0.5rem; }' 
		)
	);
	

}
add_action( 'init', 'dsc_block_styles' );

