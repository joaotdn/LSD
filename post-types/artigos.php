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
 * Article content modal after ajax request
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

            <article class="left post-content rel">
                <header class="full-width left article-header">
                        <h3 class="font-lite"><?php echo get_the_title($article_id); ?> </h3>
                        <span class="authors font-bold full-width left">por <?php echo get_the_term_list( $article_id, 'autores', '', ' ,', '' ); ?></span>
                        <time class="font-bold left full-width">2014</time>
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
                        <span class="left full-width font-lite categories text-upp">P2P / PARCEIROS / VISITA VIRTUAL</span>
                        <div class="article-share left full-width">
                            <span class="article-pdf right text-upp"><a href="#" title="Download PDF">Download PDF</a></span>
                        </div> 
                </header>

                <div class="article-text full-width abs">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, sed, sunt, tenetur nobis dolore nisi molestiae tempore natus architecto quos iste eligendi nesciunt deleniti consectetur odio culpa illum commodi cumque?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, quidem, cupiditate, id quam ipsam earum ut aut fuga officiis quia consequuntur nesciunt nisi repellendus accusantium excepturi. Dolores, labore veritatis beatae?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, et, minima excepturi reiciendis maxime in enim reprehenderit deleniti suscipit unde distinctio consequatur quasi perferendis neque obcaecati veritatis aliquid quos libero.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, voluptate, voluptatum, eum at maiores libero dicta aliquid quia illo animi consequuntur possimus nihil. Voluptate aperiam pariatur veniam totam illum laudantium.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, assumenda, sint, itaque aut asperiores maxime quibusdam magnam molestias dolorem ut qui adipisci similique a necessitatibus neque debitis illo tempora id!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, et, officia, accusamus consequatur minus in aut quo itaque recusandae incidunt voluptatibus molestias eum voluptatum hic saepe earum architecto atque temporibus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, consequuntur, optio ut commodi numquam velit eum rem perferendis at doloremque aperiam ex expedita repudiandae repellendus molestias rerum omnis in nostrum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, eos, voluptatem, atque unde natus provident laborum quia doloribus similique illo autem culpa in officia error officiis dolorem a sed aliquid.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eveniet quibusdam similique officia repellat ea nesciunt. Esse, explicabo, facilis in dolorem ipsam qui aperiam doloremque est labore corporis hic placeat.</p>
                </div>
            </article>
    </div><!-- //row -->
    <a class="close-reveal-modal">&#215;</a>
    <?php
}
?>