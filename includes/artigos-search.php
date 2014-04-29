<?php
/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_article_search', 'request_article_search' );
add_action( 'wp_ajax_request_article_search', 'request_article_search' );

function request_article_search() {
    //$value = $_GET[]
    ?>
    <section class="select-options abs">
        <header class="small-18 left text-center">
            <h1 class="text-upp font-bold">Artigos</h1>
        </header>

        <form action="" class="article-options">
            <div class="row">
                <div class="small-16 small-push-1">
                    <h3 class="text-upp white font-bold full-width left">Por autor</h3>
                    <?php
                        $terms = get_terms( 'autores', array('hide_empty' => false) );
                    ?>
                    <select name="select-author" id="select-author" class="small-18 columns">
                        <?php
                            foreach ($terms as $term):
                        ?>
                            <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <h3 class="text-upp white font-bold full-width left">Por ano</h3>
                    <?php
                        //$terms = get_terms( 'article_year', array('hide_empty' => false) );
                        $years = get_meta_values( 'article_year', 'artigos' );
                    ?>
                    <select name="select-author" id="select-year" class="small-18 columns">
                        <?php
                            foreach ($years as $year):
                        ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <h3 class="text-upp white font-bold full-width left">Por tag</h3>
                    <nav class="article-tags">
                        
                        <ul class="no-bullet small-18 columns">
                            <?php $terms = get_terms( 'tags', array('hide_empty' => false) ); ?>
                            <?php
                                foreach ($terms as $term):
                            ?>
                                <li class="small-6 left tag-li"><a href="#" data-tagslug="<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </form>
    </section><!-- //select-options -->

    <nav class="article-list abs">
        <ul class="no-bullet full-width left">
            <?php 
                $args = array( 'post_type' => 'artigos', 'posts_per_page' => 50, 'orderby' => 'date' ); 
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();

                global $post;
            ?>
            <li>
                <article data-modalid="<?php echo returnId(); ?>">

                <span class="full-width left text-upp red font-12 font-bold">
                    <?php $year = get_field('article_year'); ?>
                    <time><?php echo $year; ?></time>
                    <?php 
                        $pdf = get_field('article_pdf'); 
                        if($pdf):
                    ?>
                    <a href="<?php echo $pdf; ?>" title="Baixar PDF" class="article-pdf black" style="margin-left:10px;">Download PDF</a>
                    <?php endif; ?> 
                </span>
                <h4 class="full-width left font-lite">
                    <a href="#" title="<?php the_title(); ?>" class="black" data-reveal-id="article-modal" data-reveal><?php the_title(); ?></a>
                </h4>
                
                <p class="article-authors font-bold">por <?php echo get_the_term_list( $post->ID, 'autores', '<span class="author-slug" value="">', ' ,', '</span>' ); ?></p>
                <p class="locality text-italic">
                    <?php 
                        $fields = get_field('articles_fonts');
                        if($fields):
                            foreach($fields as $field): 
                            echo $field['article_font_desc'] . ', ';
                            endforeach;
                        endif;
                    ?>
                </p>
                <p class="categories text-app"><?php echo get_the_term_list( $post->ID, 'tags', '', ' ,', '' ); ?></p>

                </article>
            </li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>
    </nav>
    <a class="close-reveal-modal">&#215;</a>

    <?php
    exit();
}

/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_article_list_query', 'request_article_list_query' );
add_action( 'wp_ajax_request_article_list_query', 'request_article_list_query' );

function request_article_list_query() {
    $field_value = $_GET['field_value'];
    $key = $_GET['key'];

    ?>
    <ul class="no-bullet full-width left">
        <?php
            $args = array(
                'post_type' => 'artigos',
                'posts_per_page' => 50,
                'orderby' => 'date',
                'meta_key' => $key, 
                'meta_value' => $field_value
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();

            global $post;
        ?>
        <li>
            <article data-modalid="<?php echo returnId(); ?>">

            <span class="full-width left text-upp red font-12 font-bold">
                <?php $year = get_field('article_year'); ?>
                <time><?php echo $year; ?></time>
                <?php 
                    $pdf = get_field('article_pdf'); 
                    if($pdf):
                ?>
                <a href="<?php echo $pdf; ?>" title="Baixar PDF" class="article-pdf black" style="margin-left:10px;">Download PDF</a>
                <?php endif; ?> 
            </span>
            <h4 class="full-width left font-lite">
                <a href="#" title="<?php the_title(); ?>" class="black" data-reveal-id="article-modal" data-reveal><?php the_title(); ?></a>
            </h4>
            <p class="article-authors font-bold">por <?php echo get_the_term_list( $post->ID, 'autores', '<span class="author-slug" value="">', ' ,', '</span>' ); ?></p>
            <p class="locality text-italic">
                <?php 
                    $fields = get_field('articles_fonts');
                    if($fields):
                        foreach($fields as $field): 
                        echo $field['article_font_desc'] . ', ';
                        endforeach;
                    endif;
                ?>
            </p>
            <p class="categories text-app"><?php echo get_the_term_list( $post->ID, 'tags', '', ' ,', '' ); ?></p>

            </article>
        </li>

        <?php endwhile; wp_reset_query(); ?>
    </ul>
    <?php
    exit();
}

/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_article_list_tags', 'request_article_list_tags' );
add_action( 'wp_ajax_request_article_list_tags', 'request_article_list_tags' );

function request_article_list_tags() {
    $tag_value = $_GET['tag_value'];
    $taxonomy = $_GET['taxonomy'];

    ?>
    <ul class="no-bullet full-width left">
        <?php
            $args = array(
                'post_type' => 'artigos',
                $taxonomy => $tag_value,
                'posts_per_page' => 50,
                'orderby' => 'date'
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();

            global $post;
        ?>
        <li>
            <article data-modalid="<?php echo returnId(); ?>">

            <span class="full-width left text-upp red font-12 font-bold">
                <?php $year = get_field('article_year'); ?>
                <time><?php echo $year; ?></time>
                <?php 
                    $pdf = get_field('article_pdf'); 
                    if($pdf):
                ?>
                <a href="<?php echo $pdf; ?>" title="Baixar PDF" class="article-pdf black" style="margin-left:10px;">Download PDF</a>
                <?php endif; ?> 
            </span>
            <h4 class="full-width left font-lite">
                <a href="#" title="<?php the_title(); ?>" class="black" data-reveal-id="article-modal" data-reveal><?php the_title(); ?></a>
            </h4>
            <p class="article-authors font-bold">por <?php echo get_the_term_list( $post->ID, 'autores', '<span class="author-slug" value="">', ' ,', '</span>' ); ?></p>
            <p class="locality text-italic">
                <?php 
                    $fields = get_field('articles_fonts');
                    if($fields):
                        foreach($fields as $field): 
                        echo $field['article_font_desc'] . ', ';
                        endforeach;
                    endif;
                ?>
            </p>
            <p class="categories text-app"><?php echo get_the_term_list( $post->ID, 'tags', '', ' ,', '' ); ?></p>

            </article>
        </li>

        <?php endwhile; wp_reset_query(); ?>
    </ul>
    <?php
    exit();
}
?>