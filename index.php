<?php get_header(); ?>

    <div class="h-timeline">

        <figure class="loading">
            <img src="<?php echo get_template_directory_uri(); ?>/images/loading.gif" alt="">
        </figure>

        <div class="options-menu small-4">
            <a href="#" class="bt-option orange left" data-reveal-id="english-page-modal" data-reveal>
                <div class="icon-usa centered"></div>
                <small class="text-upp small-18 left text-center white">English</small>
            </a>
            <a href="#" class="bt-option red left">
                <div class="icon-lock centered"></div>
                <small class="text-upp small-18 left text-center white">Acesso restrito</small>
            </a>
            <a href="#" class="bt-option white left" data-reveal-id="search-modal" data-reveal>
                <div class="icon-search centered"></div>
                <small class="text-upp small-18 left text-center black">Busca</small>
            </a>
        </div>

        <?php get_template_part('loop','one'); ?>
        <?php //get_template_part('loop','two'); ?>
        <?php //get_template_part('loop','three'); ?>
        <?php //get_template_part('loop','four'); ?>
        
    </div><!-- //timeline -->

<?php get_footer(); ?>
