<?php get_header(); ?>

        <?php 
            get_template_part('thought','one');

            $category_id = get_cat_ID( 'Pensadouro' );
            $category = get_category($category_id);
            $category_count = $category->category_count;

            if($category_count > 10):
                get_template_part('thought','two');
            elseif($category_count > 20):
                get_template_part('thought','three');
            elseif($category_count > 30):
                get_template_part('thought','four');
            endif; 
        ?>
        
    </div><!-- //timeline -->

<?php get_footer(); ?>
