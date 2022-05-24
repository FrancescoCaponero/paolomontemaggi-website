<?php

//block with inside video and h2

function videopanel_render( $output, $attributes ) { ?>

<?php ob_start(); ?>
    <div class="blocco blocco-<?= sanitize_title($attributes['video'])?>" data-vimeo-autoplay="true" data-vimeo-background="true" data-vimeo-initialized="true">
              <iframe src="https://player.vimeo.com/video/699425286?h=def5cb59d3&amp;autoplay=1&amp;controls=0&amp;loop=1&amp;background=1&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""  title="Paolo Montemaggi">
              </iframe>
            <div>
                <?= $attributes['title-inner-video']?>
            </div>        
            <script src="https://player.vimeo.com/api/player.js"></script>
    
              
    </div>
<?php return ob_get_clean();

}
add_filter( 'lazyblock/videopanel/frontend_callback', 'videopanel_render', 10, 2 );
                                                                                                                                                                                                                                                                                                                                                                                                                       