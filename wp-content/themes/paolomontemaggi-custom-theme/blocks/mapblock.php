<?php

//Blocco

function mapblock_render( $output, $attributes ) { ?>

	<?php ob_start(); ?>
	
		<div class="blocco blocco-mapblock <?= sanitize_title($attributes['map-block-title'])?>">
            <div class="mapblock-content-wrapper">
                <div class="map-block-google">
                </div>
                <h2 class="mapblock-content-h2">
                    <?= $attributes['map-block-content']?>
                </h2>
            </div>
		</div>

	<?php return ob_get_clean();

}
add_filter( 'lazyblock/mapblock/frontend_callback', 'mapblock_render', 10, 2 );