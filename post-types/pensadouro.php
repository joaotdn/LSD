<?php
/**
 * Thought single
 */
add_action( 'wp_ajax_nopriv_request_thought', 'request_thought' );
add_action( 'wp_ajax_request_thought', 'request_thought' );

function request_thought() {
    $article_id = $_GET['modalid'];
    
    $p_postid = get_previous_post_id( $article_id );
    $n_postid = get_next_post_id( $article_id );

    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($article_id), 'full' );
    $thumb = $thumb['0'];
    ?>
    <div class="row">
        <header class="thought-header abs">
            <nav class="thought-nav right">
                <a href="#" class="thought-prev display-block white left text-center font-14" title="" data-pnpost="<?php echo $p_postid; ?>">
                    <div class="icon-prev-post left"></div>
                    <span class="text-upp display-block">Post anterior</span>
                </a>

                <a href="#" class="thought-next display-block white right text-center font-14" title="" data-pnpost="<?php echo $n_postid; ?>">
                    <div class="icon-next-post right"></div>
                    <span class="text-upp display-block">Próximo post</span>
                </a>
            </nav>

            <div class="the-thought right">
                <h1 class="text-upp">o<span>pen</span>s</h1>
                <h1 class="text-upp">en<span>sad</span></h1>
                <h1 class="text-upp">d<span>our</span>o</h1>
                <h1 class="text-upp">u<span>ro</span>pe</h1>
            </div>
        </header>

                <article class="thought-post abs">
                    <figure class="thought-thumb full-width-left" style="background-image:url(<?php echo $thumb; ?>);"></figure>

                    <section class="thought-content full-width left">
                        <header class="full-width left blog-header">
                            <time class="text-upp"><?php echo get_the_time('d \d\e M \d\e Y', $article_id); ?></time>
                            <h3 class="font-bold left full-width"><?php echo get_the_title($article_id); ?></h3>
                            <div class="share-thought left full-width">
                                
                            </div>
                        </header>

                        <div class="thought-text abs">
                            <?php echo returnContent($article_id); ?>
                        </div>
                    </section>
                </article>
            </div><!-- //row -->
            <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>