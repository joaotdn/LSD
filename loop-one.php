    <nav class="post-articles">
        
        <!-- ARTIGOS -->
        <div class="row list-articles left small-offset-2">      
            <?php 
                $args = array( 'post_type' => 'artigos', 'posts_per_page' => 4, 'orderby' => 'date' ); 
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <article class="small-2 columns left small-offset-2" data-modalid="<?php echo returnId(); ?>">
                
                <div class="small-16 small-offset-1 columns this-post">
                    <h5 class="cat-post small-18 left text-upp"><a href="#" data-reveal-id="article-page-modal" data-reveal>Artigos</a></h5>
                    <p class="title-post text-upp lh-one">
                        <a href="#" title="" class="white get-modal" data-reveal-id="article-modal" data-reveal data-title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </p>
                </div>

                <small class="abstract-post text-upp small-16 small-offset-1 left font-lite">
                    <a href="#" title="" data-reveal-id="article-modal" data-reveal><?php echo get_excerpt(60); ?></a>
                </small>

            </article>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        <!-- //ARTIGOS -->
            
        <!-- PROJETOS -->
        <div class="list-projects row left">
            <?php 
                $args = array( 'post_type' => 'projetos', 'posts_per_page' => 3, 'orderby' => 'date' ); 
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'medium' );
                $thumb = $thumb['0']; //Return thumbnail URI
            ?>
            <article class="small-4 columns left rel" data-modalid="<?php echo returnId(); ?>">
                <a href="#" class="white get-modal display-block mask-pjthumb abs" data-reveal-id="post-modal" data-reveal></a>
                <figure class="project-thumb small-18 left" style="background-image:url(<?php echo $thumb; ?>);" data-reveal-id="post-modal" data-reveal>
                    <figcaption class="small-11 columns small-offset-4 this-pj">
                        <header class="pj-title small-9 left">
                            <h6><a href="#" title="Projetos" class="text-upp get-project-timeline" data-taxname="projetos">Projetos</a></h6>
                            <h3><?php echo get_single_term(returnId(), 'projetos_categorias'); ?></h3>
                        </header>
                        <div class="small-18 left pj-abstract"> 
                            <p class="text-upp lh-one"><a href="#" class="white get-modal" data-reveal-id="post-modal" data-reveal data-title="<?php the_title(); ?>"><?php the_title(); ?></p>
                        </div> 
                    </figcaption>
                </figure>
            </article>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        <!-- //PROJETOS -->
            
        <!-- PENSADOURO -->
        <div class="list-thought row left">
            <?php       
                $category_id = get_cat_ID( 'Pensadouro' );
                query_posts('showposts=4&category_name=pensadouro'); 
                if (have_posts()): while (have_posts()) : the_post();
            ?>
            <article class="small-3 left columns this-thought" data-thumb="midias/th1.jpg" data-modalid="<?php echo returnId(); ?>">
                <header class="small-14 small-offset-2 left">
                    <h6><a href="#" title="Pensadouro" class="white text-upp get-category-timeline" data-categoryid="<?php echo $category_id; ?>">Pensadouro</a></h6>
                    <span class="white text-upp font-lite">
                        <time pubdate><?php the_time('d \d\e M \d\e Y'); ?></time>
                    </span>
                </header>
                <div class="small-14 small-offset-2 left thought-abstract">
                    <p class="text-upp lh-one">
                        <a href="#" title="<?php the_title(); ?>" class="white get-modal" data-reveal-id="thought-modal" data-reveal data-title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </p>
                </div>
            </article>
            <?php endwhile; else: endif; wp_reset_query(); ?>
        </div>
        <!-- //PENSADOURO -->

    </nav>
        