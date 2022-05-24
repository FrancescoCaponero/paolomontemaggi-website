<?php

//Blocco

function biopanel_render( $output, $attributes ) { ?>

	<?php ob_start(); ?>
		<div class="blocco blocco-biopanel">
			<h1 class="lazy-block-h1-titlebio">
				<?= $attributes['title-bio']?>
			</h1>
			<h1 class="lazy-block-h1-huge-title-bio">
				<?= $attributes['huge-title-background']?>
			</h1>
           
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





