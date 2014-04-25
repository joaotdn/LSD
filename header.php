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
                        <h4><a href="#" title="">Lab</a></h4>

                        <ul class="no-bullet sub-menu">
                            <?php $page = get_page_by_title('Clipping'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>">Clipping</a></li>
                            <?php $page = get_page_by_title('Equipe'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>" data-reveal-id="team-modal" data-reveal>Equipe</a></li>
                            <?php $page = get_page_by_title('LSD4ever'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>">LSD4ever</a></li>
                            <?php $page = get_page_by_title('Oportunidades'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>">Oportunidades</a></li>
                            <?php $page = get_page_by_title('Parceiros'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>">Parceiros</a></li>
                            <?php $page = get_page_by_title('Visita Virtual'); ?>
                            <li><a href="#" title="" data-pageid="<?php echo $page->ID; ?>">Visita Virtual</a></li>
                        </ul>

                    </li>
                    <li><h4><a href="#" title="" data-reveal-id="article-page-modal" data-reveal>Artigos</a></h4></li>
                    <?php $category_id = get_cat_ID( 'Projetos' ); ?>
                    <li><h4><a href="#" title="" class="get-category-timeline" data-categoryid="<?php echo $category_id; ?>">Projetos</a></h4></li>
                    <?php $category_id = get_cat_ID( 'Pensadouro' ); ?>
                    <li><h4><a href="#" title="" class="get-category-timeline" data-categoryid="<?php echo $category_id; ?>">Pensadouro</a></h4></li>
                    <?php $page = get_page_by_title('Visita Virtual'); ?>
                    <li><h4><a href="#" title="" data-pageid="<?php echo $page->ID; ?>">Contatos</a></h4></li>
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