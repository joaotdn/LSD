<nav class="post-articles">
        
        <!-- ARTIGOS -->
        <div class="row list-articles left small-offset-2">      
            <?php 
                $args = array( 'post_type' => 'artigos', 'posts_per_page' => 4, 'orderby' => 'date' ); 
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            
                //$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'full' );
                //$thumb = $thumb['0'];
            ?>
            <article class="small-2 columns left small-offset-2" data-modalid="<?php echo returnId(); ?>">
                
                <div class="small-16 small-offset-1 columns this-post">
                    <h5 class="cat-post small-18 left text-upp"><a href="#" data-reveal-id="article-page-modal" data-reveal>Artigos</a></h5>
                    <p class="title-post text-upp">
                        <a href="#" title="" class="white get-modal" data-reveal-id="article-modal" data-reveal><?php the_title(); ?></a>
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

                <article class="small-4 columns left">
                    <figure class="project-thumb small-18 left" style="background-image:url(midias/pj1.jpg);" data-reveal-id="post-modal" data-reveal>
                        <figcaption class="small-11 columns small-offset-4 this-pj">
                            <header class="pj-title small-9 left">
                                <h6><a href="#" title="" class="text-upp">Projetos</a></h6>
                                <h3><a href="#" title="" class="text-upp font-bold get-modal" data-reveal-id="post-modal" data-reveal>Gisella</a></h3>
                            </header>
                            <p class="small-18 left pj-abstract text-upp"><a href="#" class="white get-modal" data-reveal-id="post-modal" data-reveal>Ullam doloremque sunt obcaecati sit saepe eo Saepe?</a></p>
                        </figcaption>
                    </figure>
                </article>

                <article class="small-4 columns left">
                    <figure class="project-thumb small-18 left" style="background-image:url(midias/pj2.jpg);" data-reveal-id="post-modal" data-reveal>
                        <figcaption class="small-11 columns small-offset-4 this-pj">
                            <header class="pj-title small-9 left">
                                <h6><a href="#" title="" class="text-upp">Projetos</a></h6>
                                <h3><a href="#" title="" class="text-upp font-bold get-modal" data-reveal-id="post-modal" data-reveal>Gisella</a></h3>
                            </header>
                            <p class="small-18 left pj-abstract text-upp"><a href="#" class="white get-modal" data-reveal-id="post-modal" data-reveal>Ullam doloremque sunt obcaecati sit saepe eo Saepe?</a></p>
                        </figcaption>
                    </figure>
                </article>

                <article class="small-4 columns left">
                    <figure class="project-thumb small-18 left" style="background-image:url(midias/pj3.jpg);" data-reveal-id="post-modal" data-reveal>
                        <figcaption class="small-11 columns small-offset-4 this-pj">
                            <header class="pj-title small-9 left">
                                <h6><a href="#" title="" class="text-upp">Projetos</a></h6>
                                <h3><a href="#" title="" class="text-upp font-bold get-modal" data-reveal-id="post-modal" data-reveal>Gisella</a></h3>
                            </header>
                            <p class="small-18 left pj-abstract text-upp"><a href="#" class="white get-modal" data-reveal-id="post-modal" data-reveal>Ullam doloremque sunt obcaecati sit saepe eo Saepe?</a></p>
                        </figcaption>
                    </figure>
                </article>

            </div>
            <!-- //PROJETOS -->
            
            <!-- PENSADOURO -->
            <div class="list-thought row left">
                <article class="small-3 left columns this-thought" data-thumb="midias/th1.jpg">
                    <header class="small-14 small-offset-2 left">
                        <h6><a href="#" title="" class="white text-upp">Pensadouro</a></h6>
                        <span class="white text-upp font-lite">
                            <time pubdate>26 de outubro de 2011</time>
                        </span>
                    </header>
                    <p class="small-14 small-offset-2 left thought-abstract text-upp"><a href="#" class="white get-modal" data-reveal-id="thought-modal" data-reveal>Ullam doloremque sunt obcaecati sit saepe eo Saepe?</a></p>
                </article>

                <article class="small-3 left columns this-thought" data-thumb="midias/th1.jpg">
                    <header class="small-14 small-offset-2 left">
                        <h6><a href="#" title="" class="white text-upp">Pensadouro</a></h6>
                        <span class="white text-upp font-lite">
                            <time pubdate>26 de outubro de 2011</time>
                        </span>
                    </header>
                    <p class="small-14 small-offset-2 left thought-abstract text-upp"><a href="#" class="white get-modal" data-reveal-id="thought-modal" data-reveal>Ullam doloremque sunt obcaecati sit saepe eo Saepe?</a></p>
                </article>

                <article class="small-3 left columns this-thought" data-thumb="midias/th1.jpg">
                    <header class="small-14 small-offset-2 left">
                        <h6><a href="#" title="" class="white text-upp">Pensadouro</a></h6>
                        <span class="white text-upp font-lite">
                            <time pubdate>26 de outubro de 2011</time>
                        </span>
                    </header>
                    <p class="small-14 small-offset-2 left thought-abstract text-upp"><a href="#" class="white get-modal" data-reveal-id="thought-modal" data-reveal>Ullam doloremque sunt obcaecati sit saepe eo Saepe?</a></p>
                </article>

                <article class="small-3 left columns this-thought" data-thumb="midias/th1.jpg">
                    <header class="small-14 small-offset-2 left">
                        <h6><a href="#" title="" class="white text-upp">Pensadouro</a></h6>
                        <span class="white text-upp font-lite">
                            <time pubdate>26 de outubro de 2011</time>
                        </span>
                    </header>
                    <p class="small-14 small-offset-2 left thought-abstract text-upp"><a href="#" class="white get-modal" data-reveal-id="thought-modal" data-reveal>Ullam doloremque sunt obcaecati sit saepe eo Saepe?</a></p>
                </article>
            </div>
        </nav>
        <!-- //PENSADOURO -->