<?php

//Blocco

function biopanel_render( $output, $attributes ) { ?>

	<?php ob_start(); ?>
		<div class="blocco blocco-biopanel">
			<h2 class="lazy-block-h2-titlebio">
				<?= $attributes['title-bio']?>
			</h2>
			<h3 class="lazy-block-h3-huge-title-bio">
				<?= $attributes['huge-title-background']?>
			</h3>
           
            <div class="lazy-block-p-wrapper">
                <p class="first-p-bio">
                    <?= $attributes['first-paragraph']?>
                </p>
                
                <p class="second-p-bio">
                    <?= $attributes['second-paragraph']?>
                </p>
                <p class="third-p-bio">
                    <?= $attributes['third-paragraph']?>
                </p>
            </div>       
		</div>
	<?php return ob_get_clean();

}
add_filter( 'lazyblock/biopanel/frontend_callback', 'biopanel_render', 10, 2 );





