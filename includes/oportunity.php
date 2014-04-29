<?php
/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_oportunity', 'request_oportunity' );
add_action( 'wp_ajax_request_oportunity', 'request_oportunity' );

function request_oportunity() {
    //$value = $_GET[]
    ?>
    <div class="row">
        <div class="abs post-thumb">
            <hgroup class="opt-header">
                <h1 class="text-italic text-upp">opor</h1>
                <h1 class="text-italic text-upp">tuni</h1>
                <h1 class="text-italic text-upp">dades</h1>
                <h6 class="text-upp font-bold">enviar e-mail para info@lsd.ufcg.edu.br <br>com currículo vitae em anexo.</h6>
            </hgroup>

            <div class="icon-lsd abs"></div>
        </div>

        <article class="oportunity-text abs">
            <?php 
                $page = get_page_by_title('Oportunidades');
                $oportunities = get_field('oportunity', $page->ID); 
                foreach($oportunities as $oportunity):
            ?>
            <h3 class="font-lite"><?php echo $oportunity['oportunity_name']; ?></h3>
            <p><?php echo $oportunity['oportunity_desc']; ?></p>
            <?php
                endforeach;  
            ?>
        </article>
    </div>
    <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>