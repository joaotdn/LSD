<?php get_header(); ?>
        
        <section class="projects-posts left">  
            <div class="small-18 left small-pull-4 full-height">
            <?php 
                $args = array( 'post_type' => 'projetos', 'posts_per_page' => 3, 'orderby' => 'date', 'offset' => 6 ); 
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'large' );
                $thumb = $thumb['0']; //Return thumbnail URI
            ?>
            <article class="small-4 left th-pj-timeline rel" data-modalid="<?php echo returnId(); ?>">
                <figure class="small-18 left" style="background-image: url(<?php echo $thumb; ?>);" data-reveal-id="post-modal" data-reveal>
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
        </section>

<?php get_footer(); ?>
