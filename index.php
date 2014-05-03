<?php get_header(); ?>
        
        <?php
            $category_id = get_cat_ID( 'Pensadouro' );
            $category = get_category($category_id);
            $category_count = $category->category_count;

            $projetos = new WP_Query( array( 'post_type' => 'projetos', 'posts_per_page' => -1, 'post_status' => 'publish' ) );
            $projetos_count = $projetos->post_count;

            $artigos = new WP_Query( array( 'post_type' => 'artigos', 'posts_per_page' => -1, 'post_status' => 'publish' ) );
            $artigos_count = $artigos->post_count;

            get_template_part('loop','one');

            if($artigos_count > 4 || $projetos_count > 3 || $category_count > 4):
                get_template_part('loop','two');
            elseif($artigos_count > 8 || $projetos_count > 6 || $category_count > 8):
                get_template_part('loop','three');
            elseif($artigos_count > 12 || $projetos_count > 9 || $category_count > 12):
                get_template_part('loop','four');
            endif;
        ?>

    </div><!-- //timeline -->


<?php get_footer(); ?>
