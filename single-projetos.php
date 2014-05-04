<?php get_header(); ?>

<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'full' );
    $thumb = $thumb['0'];
?>
<div id="post-modal" class="reveal-modal visible" data-reveal>
	<div class="row">
        <div class="abs post-thumb" style="background-image: url(<?php echo $thumb; ?>);">
            <header class="post-header abs">
                <p class="text-upp font-lite">Projetos</p>
                <h1 class="text-upp font-lite"><?php echo get_single_term(returnId(), 'projetos_categorias'); ?></h1>
            </header>
        </div><!-- post-thumb -->
        
        <article class="left post-content rel">

            <nav class="full-width left post-tags">
                    
                    <dl class="inline-list text-upp font-lite tabs" data-tab>
                        <?php 
                            $tab = get_field('pj_about', returnId()); 
                            if($tab):
                        ?>
                            <dd class="active"><a href="#sobre" title="">Sobre o projeto</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_pilar', returnId()); 
                            if($tab):
                        ?>
                            <dd><a href="#pilares" title="">Pilares</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_apply', returnId()); 
                            if($tab):
                        ?>
                            <dd><a href="#aplicacoes" title="">Aplicações</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_success', returnId()); 
                            if($tab):
                        ?>
                            <dd><a href="#casos" title="">Casos de sucesso</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_publications', returnId()); 
                            if($tab):
                        ?>
                            <dd><a href="#publicacoes" title="">Publicações</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_downloads', returnId()); 
                            if($tab):
                        ?>
                            <dd><a href="#downloads" title="">Downloads</a></dd>
                        <?php endif; ?>
                        <?php 
                            $tab = get_field('pj_contact', returnId()); 
                            if($tab):
                        ?>
                            <dd><a href="#contato" title="">Contato</a></dd>
                        <?php endif; ?>
                    </dl>

            </nav><!-- //Tabs -->

            <div class="tabs-content">
                <?php 
                    $tab = get_field('pj_about', returnId()); 
                    if($tab):
                ?>
                <div id="sobre" class="post-text full-width abs content active">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_pilar', returnId()); 
                    if($tab):
                ?>
                <div id="pilares" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_apply', returnId()); 
                    if($tab):
                ?>
                <div id="aplicacoes" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_success', returnId()); 
                    if($tab):
                ?>
                <div id="casos" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_publications', returnId()); 
                    if($tab):
                ?>
                <div id="publicacoes" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>

                <?php 
                    $tab = get_field('pj_downloads', returnId()); 
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
                    $tab = get_field('pj_contact', returnId()); 
                    if($tab):
                ?>
                 <div id="contato" class="post-text full-width abs content">
                    <?php echo $tab; ?>
                </div>
                <?php endif; ?>


            </div><!-- //tabs-content -->
        
        </article><!-- //post-content -->
        
        </div><!-- //row -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="return-main-page">&#215;</a>
</div>

<?php get_footer(); ?>