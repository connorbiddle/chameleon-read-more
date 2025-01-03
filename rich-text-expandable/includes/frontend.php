<div class="fl-rich-text-expandable">
	<div class="fl-rich-text-expandable-content">
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

		?>
	</div>

	<a class="fl-rich-text-expandable-button" href="javascript:void(0)"><?php echo $settings->read_more_text; ?></a>
</div>
