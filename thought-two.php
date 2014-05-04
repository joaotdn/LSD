<nav class="category-timeline">
    <section class="category-posts">
        <?php       
            query_posts('showposts=10&category_name=pensadouro&offset=10'); 
            if (have_posts()): while (have_posts()) : the_post();
            global $post;
        ?>
        <article data-thumb="<?php echo $thumb; ?>" data-modalid="<?php echo returnId(); ?>">
            <section class="post-info small-14 columns small-offset-2">
                <header>
                    <h5 class="text-upp">
                        <a href="#" title="" class="white">Pensadouro</a>
                    </h5>
                    <time class="text-upp white"><?php the_time('d \d\e M \d\e Y'); ?></time>
                </header>

                <p class="post-link lh-one">
                    <a href="#" title="<?php the_title(); ?>" class="white display-block" data-reveal-id="thought-modal" data-reveal data-title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </p>    
            </section>
        </article>
        <?php endwhile; else: endif; wp_reset_query(); ?>
    </section>
</nav><!-- //end timeline -->