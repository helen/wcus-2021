<?php
/**
 * @var array $args {
 *     $args is provided by get_template_call.
 *
 *     @type array $attributes Block attributes.
 *     @type array $content    Block content.
 *     @type array $block      Block instance.
 * }
 */

// Set defaults.
$args = wp_parse_args(
	$args,
	array(
		'attributes' => array(),
	)
);

// Bail early if no headline.
if ( empty( $args['attributes']['headline'] ) ) {
	return;
}

$allowed_html = array(
	'br'     => array(),
	'p'      => array(),
	'strong' => array(),
);
?>
<div class="wcus-demo
	<?php if ( isset( $args['attributes']['className'] ) ) : ?>
		<?php echo esc_attr( $args['attributes']['className'] ); ?>
	<?php endif; ?>">
	<div class="wcus-demo__inner">
		<?php if ( ! empty( $args['attributes']['label'] ) ) : ?>
			<span class="wcus-demo__label">
				<?php echo esc_html( $args['attributes']['label'] ); ?>
			</span>
		<?php endif; ?>
		<?php if ( ! empty( $args['attributes']['headline'] ) ) : ?>
			<h2 class="wcus-demo__title">
				<?php echo esc_html( $args['attributes']['headline'] ); ?>
			</h2>
		<?php endif; ?>
		<?php if ( ! empty( $args['attributes']['description'] ) ) : ?>
			<div class="wcus-demo__desc">
				<p><?php echo wp_kses( $args['attributes']['description'], $allowed_html ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</div>
