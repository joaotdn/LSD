<?php
/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_clipping', 'request_clipping' );
add_action( 'wp_ajax_request_clipping', 'request_clipping' );

function request_clipping() {
    //$value = $_GET[]
    ?>
    <div class="row">
        <div class="abs post-thumb" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/clipping-bg.jpg);">
            <hgroup class="opt-header clipp">
                <h2 class="text-italic">[clipping]</h2>
            </hgroup>
        </div>

        <article class="oportunity-text abs">
            
        </article>
    </div>
    <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>