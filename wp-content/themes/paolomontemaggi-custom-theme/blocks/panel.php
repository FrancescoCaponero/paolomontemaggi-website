<?php

//Blocco

function panel_render( $output, $attributes ) { ?>

	<?php ob_start(); ?>
	
		<div class="blocco blocco-<?= sanitize_title($attributes['name']) ?>">
			<h1 class="lazy-block-h1-about">
				<?= $attributes['name']?>
			</h1>
            <div class="innerblock-panel">
                 <?= $attributes['innerblock']?>
            </div>   
		</div>
	
		<div class="clear"></div>
	<?php return ob_get_clean();

}
add_filter( 'lazyblock/panel/frontend_callback', 'panel_render', 10, 2 );




