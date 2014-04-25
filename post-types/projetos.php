<?php
/**
 * Post type : Projetos
 */
function projetos_init() {
  $labels = array(
    'name'               => 'Projetos',
    'singular_name'      => 'Projeto',
    'add_new'            => 'Cadastrar Novo',
    'add_new_item'       => 'Cadastrar novo',
    'edit_item'          => 'Editar Projeto',
    'new_item'           => 'Novo Projeto',
    'all_items'          => 'Todos os Projetos',
    'view_item'          => 'Ver Projeto',
    'search_items'       => 'Buscar Projetos',
    'not_found'          => 'N�o encontrado',
    'not_found_in_trash' => 'N�o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Projetos'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'projetos' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'menu_position'      => 1,
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor','thumbnail','excerpt' )
  );

  register_post_type( 'projetos', $args );

  $labels = array(
    'name'              => __( 'Categorias'),
    'singular_name'     => __( 'Categoria'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usadas' ),
    'all_items'         => __( 'Todas as categorias' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Add nova' ),
    'update_item'       => __( 'Atualizar' ),
    'add_new_item'      => __( 'Cadastrar nova categoria' ),
    'new_item_name'     => __( 'Nova' )
    );

  register_taxonomy("projetos_categorias", array("projetos"), array(
    "hierarchical"      => true, 
    "labels"            => $labels, 
    "singular_label"    => "Categoria", 
    "rewrite"           => true,
    "add_new_item"      => "Cadastrar nova categoria",
    "new_item_name"     => "Nova categoria",
  ));
}
add_action( 'init', 'projetos_init' );


/**
 * Project single
 */
add_action( 'wp_ajax_nopriv_request_project', 'request_project' );
add_action( 'wp_ajax_request_project', 'request_project' );

function request_project() {
    $article_id = $_GET['modalid'];

    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($article_id), 'full' );
    $thumb = $thumb['0'];
    ?>
    <div class="row">
        <div class="abs post-thumb" style="background-image: url(<?php echo $thumb; ?>);">
            <header class="post-header abs">
                <p class="text-upp font-lite">Projetos</p>
                <h1 class="text-upp font-lite"><?php echo get_single_term($article_id, 'projetos_categorias'); ?></h1>
            </header>
        </div><!-- post-thumb -->
        
        <article class="left post-content rel">

            <nav class="full-width left post-tags">
                    
                    <dl class="inline-list text-upp font-lite tabs" data-tab>
                        <?php 
                            $tab = get_field('pj_about', $article_id); 
                            if($tab):
                        ?>
                            <dd class="active"><a href="#sobre" title="">Sobre o projeto</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_pilar', $article_id); 
                            if($tab):
                        ?>
                            <dd><a href="#pilares" title="">Pilares</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_apply', $article_id); 
                            if($tab):
                        ?>
                            <dd><a href="#aplicacoes" title="">Aplicações</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_success', $article_id); 
                            if($tab):
                        ?>
                            <dd><a href="#casos" title="">Casos de sucesso</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_publications', $article_id); 
                            if($tab):
                        ?>
                            <dd><a href="#publicacoes" title="">Publicações</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_downloads', $article_id); 
                            if($tab):
                        ?>
                            <dd><a href="#downloads" title="">Downloads</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_contact', $article_id); 
                            if($tab):
                        ?>
                            <dd><a href="#contato" title="">Contato</a></dd>
                        <?php endif; ?>
                    </dl>

            </nav><!-- //Tabs -->

            <div class="tabs-content">
                <?php 
                    $tab = get_field('pj_about', $article_id); 
                    if($tab):
                ?>
                <div id="sobre" class="post-text full-width abs content active">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_pilar', $article_id); 
                    if($tab):
                ?>
                <div id="pilares" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_apply', $article_id); 
                    if($tab):
                ?>
                <div id="aplicacoes" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_success', $article_id); 
                    if($tab):
                ?>
                <div id="casos" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_publications', $article_id); 
                    if($tab):
                ?>
                <div id="publicacoes" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_downloads', $article_id); 
                    if($tab):
                ?>
                <div id="downloads" class="post-text full-width abs content">
                    <?php  
                        foreach($tab as $file): 
                            ?>
                            <p class="text-upp" style="margin-bottom: 0;"><?php echo $file['pj_file_desc']; ?></p>
                            <p><a href="<?php echo $file['pj_file']; ?>" class="font-bold">Baixar</a></p>
                            <?php
                        endforeach;
                    ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_contact', $article_id); 
                    if($tab):
                ?>
                 <div id="contato" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>


            </div><!-- //tabs-content -->
        
        </article><!-- //post-content -->
        
        </div><!-- //row -->
      <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>