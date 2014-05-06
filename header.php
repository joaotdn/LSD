<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    <title>LSD | Laboratório de Sistemas Distribuídos</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-ico"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
    <!--<script src="bower_components/modernizr/modernizr.js"></script>-->

    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jpreloader.js"></script>
    <script>
        $(document).ready(function() {
            $('body').jpreLoader({
                loaderVPos : 0,
                showPercentage : false,
                splashID : "#jSplash",
                //autoClose : false 
            });
        });
    </script>
</head>

<body>
    
    <div id="main-menu">
        <div class="row rel">
            
            <figure class="logo small-18 left">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Página principal"><div class="icon-logo centered"></div></a>
            </figure>

            <nav class="nav-menu small-16 left rel">
                <ul class="no-bullet">
                    <li>
                        <h4 class="white text-upp font-bold">Lab</h4>
                        <ul class="no-bullet sub-menu">
                            <li><a href="#" title="" data-reveal-id="clipping-modal" data-reveal>Clipping</a></li>
                            <?php $page = get_page_by_title('Equipe'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>" data-reveal-id="team-modal" data-reveal>Equipe</a></li>
                            <?php $page = get_page_by_title('LSD4ever'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>" data-reveal-id="teamever-modal" data-reveal>LSD4ever</a></li>
                            <?php $page = get_page_by_title('Oportunidades'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>" data-reveal-id="oportunity-modal" data-reveal>Oportunidades</a></li>
                            <?php $page = get_page_by_title('Parceiros'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>" data-reveal-id="friends-modal" data-reveal>Parceiros</a></li>
                            <?php $page = get_page_by_title('Visita Virtual'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>" data-reveal-id="tour-modal" data-reveal>Visita Virtual</a></li>
                        </ul>
                    </li>
                    <li><h4><a href="#" title="" data-reveal-id="article-page-modal" data-reveal>Artigos</a></h4></li>

                    <?php $projetos_url = get_post_type_archive_link('projetos'); ?>
                    <li><h4><a href="<?php echo $projetos_url; ?>" title="" class="get-category-timeline" data-categoryid="<?php echo $category_id; ?>">Projetos</a></h4></li>
                    
                    <?php $category_id = get_cat_ID( 'Pensadouro' ); $category_link = get_category_link( $category_id ); ?>
                    <li><h4><a href="<?php echo esc_url( $category_link ); ?>" title="" class="get-category-timeline" data-categoryid="<?php echo $category_id; ?>">Pensadouro</a></h4></li>
                    
                    <?php $page = get_page_by_title('Contato'); ?>
                    <li><h4><a href="#" title="" data-pageid="<?php echo $page->ID; ?>" data-reveal-id="contact-modal" data-reveal>Contatos</a></h4></li>
                </ul>
            </nav>
        </div><!-- //row -->

        <footer class="small-18 abs" id="footer">
            <p class="text-upp font-lite">Av. Aprígio Veloso, 882</p>
            <p class="text-upp font-lite">Bloco CO, Bodocongó</p>
            <p class="text-upp font-lite">Campina Grande - PB, Brasil</p>
            <h6 class="text-upp">Fone: +55 83 2101 1365</h6>
            <h6 class="text-upp">Fax: +55 83 2101 1365</h6>
        </footer><!-- //footer -->
        
    </div><!-- //main-menu -->

    <div class="h-timeline">

    <figure class="loading">
        <img src="<?php echo get_template_directory_uri(); ?>/images/loading.gif" alt="">
    </figure>

    <div class="options-menu small-4">
        <a href="#" class="bt-option orange left" data-reveal-id="english-page-modal" data-reveal>
            <div class="icon-usa centered"></div>
            <small class="text-upp small-18 left text-center white">English</small>
        </a>
        <a href="/wp-admin" target="_blank" class="bt-option red left">
            <div class="icon-lock centered"></div>
            <small class="text-upp small-18 left text-center white">Acesso restrito</small>
        </a>
        <a href="#" class="bt-option white left" data-reveal-id="search-modal" data-reveal>
            <div class="icon-search centered"></div>
            <small class="text-upp small-18 left text-center black">Busca</small>
        </a>
    </div> <!-- ...continue h-timeline -->
