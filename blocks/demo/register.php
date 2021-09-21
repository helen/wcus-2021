<?php
namespace Helen\WCUS\Demo;

register_block_type_from_metadata(
	get_stylesheet_directory() . '/blocks/demo',
	array(
		'render_callback' => 'render',
	)
);

function render_block_callback( $attributes, $content, $block ) {
	ob_start();

	get_template_part(
		'blocks/demo/render',
		null,
		array(
			'attributes' => $attributes,
			'content'    => $content,
			'block'      => $block,
		)
	);

	return ob_get_clean();
}
