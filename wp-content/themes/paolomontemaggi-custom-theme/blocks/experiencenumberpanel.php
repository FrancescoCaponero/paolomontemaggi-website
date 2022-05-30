<?php

//Blocco

function experiencenumberpanel_render( $output, $attributes ) { ?>

	<?php ob_start(); ?>
		<div class="blocco blocco-experiencenumberpanel">
            <div class="lazy-block-number-experience-first">
                <h3 class="lazy-block-h3-number counter" data-max= "<?= $attributes['first-number']?>" >
                    <?= $attributes['first-number']?>
                </h3>
                <div class="block-experience-line"></div>
                <h3 class="lazy-block-h3-number-text">
                    <?= $attributes['first-number-text']?>
                </h3>
            </div>
            <div class="lazy-block-number-experience-second">
                <h3 class="lazy-block-h3-number counter" data-max= "<?= $attributes['second-number']?>">
                    <?= $attributes['second-number']?>
                </h3>
                <div class="block-experience-line"></div>
                <h3 class="lazy-block-h3-number-text">
                    <?= $attributes['second-number-text']?>
                </h3>
            </div>
            <div class="lazy-block-number-experience-third">
                <h3 class="lazy-block-h3-number counter" data-max= "<?= $attributes['third-number']?>">
                    <?= $attributes['third-number']?>
                </h3>
                <div class="block-experience-line"></div>
                <h3 class="lazy-block-h3-number-text">
                    <?= $attributes['third-number-text']?>
                </h3>
            </div>
		</div>
	<?php return ob_get_clean();

}
add_filter( 'lazyblock/experiencenumberpanel/frontend_callback', 'experiencenumberpanel_render', 10, 2 );