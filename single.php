<?php get_header(); ?>

<div id="thought-modal" class="reveal-modal visible" data-reveal>
	<?php
		$p_postid = get_previous_post_id( returnId() );
    	$n_postid = get_next_post_id( returnId() );

    	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'full' );
    	$thumb = $thumb['0'];
	?>
	<div class="row thought-row">
        <figure class="load-post">
            <img src="<?php echo get_template_directory_uri(); ?>/images/loading.gif" alt="">
        </figure>

        <header class="thought-header abs">
            <nav class="thought-nav right">
                <?php if($p_postid != ''): ?>
                <a href="#" class="thought-prev display-block white left text-center font-14" title="" data-getpnpost data-pnpost="<?php echo $p_postid; ?>">
                    <div class="icon-prev-post left"></div>
                    <span class="text-upp display-block">Post anterior</span>
                </a>
                <?php endif; ?>
                <?php if($n_postid != ''): ?>
                <a href="#" class="thought-next display-block white right text-center font-14" title="" data-getpnpost data-pnpost="<?php echo $n_postid; ?>">
                    <div class="icon-next-post right"></div>
                    <span class="text-upp display-block">Próximo post</span>
                </a>
                <?php endif; ?>
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
                    <time class="text-upp"><?php echo get_the_time('d \d\e M \d\e Y', returnId()); ?></time>
                    <h3 class="font-bold left full-width"><?php echo get_the_title(returnId()); ?></h3>
                    <div class="share-thought left full-width">
                        <div class="fb-like" data-href="<?php echo get_permalink( returnId() ); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                        <a href="<?php echo get_permalink( returnId() ); ?>" class="twitter-share-button" data-lang="en">Tweet</a>         
                    </div>
                </header>

                <div class="thought-text abs">
                    <?php echo returnContent(returnId()); ?>
                </div>
            </section>
        </article>
    </div><!-- //row -->

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="return-main-page">&#215;</a>
</div>

<?php get_footer(); ?>