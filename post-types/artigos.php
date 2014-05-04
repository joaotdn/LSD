<?php
/**
 * Post type : Artigos
 */
function artigos_init() {
  $labels = array(
    'name'               => 'Artigos',
    'singular_name'      => 'Artigo',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar novo Artigo',
    'edit_item'          => 'Editar Artigo',
    'new_item'           => 'Novo Artigo',
    'all_items'          => 'Todos os Artigos',
    'view_item'          => 'Ver Artigo',
    'search_items'       => 'Buscar Artigos',
    'not_found'          => 'N�o encontrado',
    'not_found_in_trash' => 'N�o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Artigos'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'artigos' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'menu_position'      => 1,
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor','thumbnail','excerpt' )
  );

  register_post_type( 'artigos', $args );

  $labels = array(
    'name'              => __( 'Autores'),
    'singular_name'     => __( 'Autor'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usados' ),
    'all_items'         => __( 'Todos os autores' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Add novo' ),
    'update_item'       => __( 'Atualizar' ),
    'add_new_item'      => __( 'Adicionar novo autor' ),
    'new_item_name'     => __( 'Novo' )
    );

  register_taxonomy("autores", array("artigos"), array(
    "hierarchical"      => true, 
    "labels"            => $labels, 
    "singular_label"    => "Autor", 
    "rewrite"           => true,
    "add_new_item"      => "Adicionar novo autor",
    "new_item_name"     => "Novo autor",
  ));

  $labels = array(
    'name'              => __( 'Tags'),
    'singular_name'     => __( 'Tag'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usadas' ),
    'all_items'         => __( 'Todas as tags' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Add nova' ),
    'update_item'       => __( 'Atualizar' ),
    'add_new_item'      => __( 'Adicionar nova tag' ),
    'new_item_name'     => __( 'Nova' )
    );

  register_taxonomy("tags", array("artigos"), array(
    "hierarchical"      => true, 
    "labels"            => $labels, 
    "singular_label"    => "Tag", 
    "rewrite"           => true,
    "add_new_item"      => "Adicionar nova tag",
    "new_item_name"     => "Nova tag",
  ));
}
add_action( 'init', 'artigos_init' );


/**
 * Article single
 */
add_action( 'wp_ajax_nopriv_request_article', 'request_article' );
add_action( 'wp_ajax_request_article', 'request_article' );

function request_article() {
    $article_id = $_GET['modalid'];

    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($article_id), 'full' );
    $thumb = $thumb['0'];
    ?>
    <div class="row">
            <div class="abs post-thumb" style="background-image: url(<?php echo $thumb; ?>);">
                <header class="post-header abs article">
                    <h1 class="text-upp font-lite italic">Artigo</h1>
                </header>
            </div>

            <article class="left post-content atc-ct">
                <header class="full-width left article-header">
                        <h3 class="font-lite"><?php echo get_the_title($article_id); ?> </h3>
                        <span class="article-authors authors font-bold full-width left anchor-request" data-reveal-id="article-page-modal" data-reveal>por <?php echo get_the_term_list( $article_id, 'autores', '', ' ,', '' ); ?></span>
                        <?php $year = get_field('article_year', $article_id); ?>
                        <time class="font-bold left full-width"><?php echo $year; ?></time>
                        <span class="left full-width font-lite locality">
                        <?php 
                            $fields = get_field('articles_fonts', $article_id);
                            if($fields):
                                foreach($fields as $field): 
                                echo $field['article_font_desc'] . ', ';
                                endforeach;
                            endif;
                        ?>
                        </span>
                        <span class="left full-width font-lite categories text-upp anchor-request text-app" data-reveal-id="article-page-modal" data-reveal><?php echo get_the_term_list( $article_id, 'tags', '', ' ,', '' ); ?></span>
                       
                        <div class="article-share left full-width">
                            <?php 
                                $pdf = get_field('article_pdf', $article_id); 
                                if($pdf):
                            ?>
                            <span class="article-pdf right text-upp"><a href="<?php echo $pdf; ?>" title="Download PDF">Download PDF</a></span>
                            <?php endif; ?> 
                        </div>
                </header>

                <div class="article-text full-width">
                    <?php echo returnContent($article_id); ?>
                </div>
            </article>
    </div><!-- //row -->
    <a class="close-reveal-modal">&#215;</a>
    <?php
}
?>