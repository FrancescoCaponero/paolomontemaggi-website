<?php

//Blocco

function panel_render( $output, $attributes ) { ?>

	<?php ob_start(); ?>
	
		<div class="blocco blocco-<?= sanitize_title($attributes['name']) ?>">
			<h2 class="lazy-block-h2-about">
				<?= $attributes['name']?>
			</h2>
			<h3 class="lazy-block-h3-huge-about">
				<?= $attributes['name']?>
			</h3>
            <div class="innerblock-panel">
                 <?= $attributes['innerblock']?>
            </div>   
		</div>
	
		<div class="clear"></div>
	<?php return ob_get_clean();

}
add_filter( 'lazyblock/panel/frontend_callback', 'panel_render', 10, 2 );




