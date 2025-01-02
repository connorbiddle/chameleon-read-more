<div class="fl-rich-text-expandable">
	<?php

	global $wp_embed;
	$wpautop = true;

	// should we wpautop?
	if ( isset( $settings->connections ) && is_array( $settings->connections ) ) {
		if ( isset( $settings->connections['text'] ) && isset( $settings->connections['text']->property ) && 'content' === $settings->connections['text']->property ) {
			$wpautop = false;
		}
	}
	echo true === $wpautop ? FLBuilderUtils::wpautop( $wp_embed->autoembed( $settings->text ), $module ) : $wp_embed->autoembed( $settings->text );

	?> <a class="fl-rich-text-expandable-expand" href="javascript:void(0)">Read more</a>
</div>
