<?php get_header(); ?>

<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(returnId()), 'full' );
    $thumb = $thumb['0'];
?>
<div id="article-modal" class="reveal-modal visible" data-reveal>
	<div class="row">
            <div class="abs post-thumb" style="background-image: url(<?php echo $thumb; ?>);">
                <header class="post-header abs article">
                    <h1 class="text-upp font-lite italic">Artigo</h1>
                </header>
            </div>

            <article class="left post-content atc-ct rel">
                <header class="full-width left article-header">
                        <h3 class="font-lite"><?php echo get_the_title(returnId()); ?> </h3>
                        <span class="article-authors authors font-bold full-width left anchor-request" data-reveal-id="article-page-modal" data-reveal>por <?php echo get_the_term_list( returnId(), 'autores', '', ' ,', '' ); ?></span>
                        <?php $year = get_field('article_year', returnId()); ?>
                        <time class="font-bold left full-width"><?php echo $year; ?></time>
                        <span class="left full-width font-lite locality">
                        <?php 
                            $fields = get_field('articles_fonts', returnId());
                            if($fields):
                                foreach($fields as $field): 
                                echo $field['article_font_desc'] . ', ';
                                endforeach;
                            endif;
                        ?>
                        </span>
                        <span class="left full-width font-lite categories text-upp anchor-request text-app" data-reveal-id="article-page-modal" data-reveal><?php echo get_the_term_list( returnId(), 'tags', '', ' ,', '' ); ?></span>
                       
                        <div class="article-share left full-width">
                            <?php 
                                $pdf = get_field('article_pdf', returnId()); 
                                if($pdf):
                            ?>
                            <span class="article-pdf right text-upp"><a href="<?php echo $pdf; ?>" title="Download PDF">Download PDF</a></span>
                            <?php endif; ?> 
                        </div>
                </header>

                <div class="article-text full-width">
                    <?php echo returnContent(returnId()); ?>
                </div>
            </article>
    </div><!-- //row -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="return-main-page">&#215;</a>
</div>

<?php get_footer(); ?>