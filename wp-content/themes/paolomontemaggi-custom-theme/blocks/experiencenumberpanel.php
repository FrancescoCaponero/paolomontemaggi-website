<?php

//Blocco

function experiencenumberpanel_render( $output, $attributes ) { ?>

	<?php ob_start(); ?>
		<div class="blocco blocco-experiencenumberpanel">
            <div class="lazy-block-number-experience-first">
                <h1 class="lazy-block-h1-number counter" data-max= "<?= $attributes['first-number']?>" >
                    <?= $attributes['first-number']?>
                </h1>
                <div class="block-experience-line"></div>
                <h1 class="lazy-block-h1-number-text">
                    <?= $attributes['first-number-text']?>
                </h1>
            </div>
            <div class="lazy-block-number-experience-second">
                <h1 class="lazy-block-h1-number counter" data-max= "<?= $attributes['second-number']?>">
                    <?= $attributes['second-number']?>
                </h1>
                <div class="block-experience-line"></div>
                <h1 class="lazy-block-h1-number-text">
                    <?= $attributes['second-number-text']?>
                </h1>
            </div>
            <div class="lazy-block-number-experience-third">
                <h1 class="lazy-block-h1-number counter" data-max= "<?= $attributes['third-number']?>">
                    <?= $attributes['third-number']?>
                </h1>
                <div class="block-experience-line"></div>
                <h1 class="lazy-block-h1-number-text">
                    <?= $attributes['third-number-text']?>
                </h1>
            </div>
		</div>
	<?php return ob_get_clean();

}
add_filter( 'lazyblock/experiencenumberpanel/frontend_callback', 'experiencenumberpanel_render', 10, 2 );