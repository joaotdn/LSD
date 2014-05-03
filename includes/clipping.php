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
            <nav class="list-clipping small-18 columns clearing-thumbs" data-clearing>
                <?php       
                    $category_id = get_cat_ID( 'Clipping' );
                    query_posts('showposts=100&category_name=clipping'); 
                    if (have_posts()): while (have_posts()) : the_post();

                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'medium' );
                    $thumb = $thumb['0']; //Return thumbnail URI

                    $img = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'full' );
                    $img = $img['0'];
                ?>
                <figure class="small-18 left">
                    <figcaption class="small-18 left">
                        <h4 class="font-lite black">Wired</h4>
                        <p class="text-upp"><time pubdate><?php the_time('d \d\e F \d\e Y'); ?></time></p>
                    </figcaption>
                    
                    <a href="<?php echo $img; ?>" class="display-block small-18 left" title="<?php the_title(); ?>">
                        <img src="<?php echo $thumb; ?>" alt="" data-caption="<?php the_title(); ?>">
                    </a>
                </figure>
                <?php endwhile; else: endif; wp_reset_query(); ?>
            </nav>
        </article>
    </div>
    <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>