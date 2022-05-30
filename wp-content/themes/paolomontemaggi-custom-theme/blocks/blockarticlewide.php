
<?php

//Blocco
function blockarticlewide_render( $output, $attributes ) { ?>
	<?php ob_start(); ?>
    
		<div class="blocco blocco-blockarticlewide <?php if(isset($attributes['image-size-sel']['value'])){echo 'overflow-hidden';}else{echo '';} ?>">
            <div class="blockarticlewide-side-container <?= $attributes['color-picker-selection']['value']?> <?= $attributes['container-position']['value']?>">
                <h3 class="block-article-title-style"><?= $attributes['block-article-title']?></h3>
                <div class="article-img-p-container">
                    <div class="img-article-container-style <?= $attributes['image-size-sel']['value']?>">
                        <img class="png-article-style" src="<?= $attributes['png-article-image']['url']?>">
                    </div>
                    <p class="block-article-content-style"><?= $attributes['block-article-content']?></p>
                </div>
            </div>
		</div>
        <div class="clear"></div>


	<?php return ob_get_clean();
}

add_filter( 'lazyblock/blockarticlewide/frontend_callback', 'blockarticlewide_render', 10, 2 );

