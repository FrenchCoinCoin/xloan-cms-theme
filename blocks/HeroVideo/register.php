<?php

function acf_hero_video_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'hero_video-item',
			'title'				=> __('Hero avec video'),
			'description'		=> __('Bloc hero avec video'),
			'render_template'	=> 'blocks/HeroVideo/render.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'portfolio' ),
		));
	}
}

add_action('acf/init', 'acf_hero_video_item_block');

