<?php
/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_contact_form', 'request_contact_form' );
add_action( 'wp_ajax_request_contact_form', 'request_contact_form' );

function request_contact_form() {
    //$value = $_GET[]
    ?>
    
    <div class="row">
        <div class="abs post-thumb">
            <header class="post-header abs article">
                <h1 class="text-upp font-lite full-width left text-center ct">Contato</h1>
            </header>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3958.2250665842153!2d-35.907427999999996!3d-7.215147999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aea086d4a53101%3A0xf4804c28cbee4489!2sUniversidade+Federal+de+Campina+Grande+-+Ufcg!5e0!3m2!1spt-BR!2sbr!4v1398636098077" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
        </div>

        <article class="left post-content rel">
            <hgroup class="contact-info">
                
                <div class="info-left">
                    <h4 class="font-lite full-width left">Telefone/Fax</h4>
                    <h4 class="font-bold full-width left">+55 83 2101 1365</h4>

                    <h4 class="font-lite full-width left">E-mail</h4>
                    <h4 class="font-bold full-width left">info@lsd.ufcg.edu.br</h4>
                </div>
                    
                <div class="info-left">
                    <h4 class="font-lite full-width left">Endereço</h4>
                    <h4 class="font-bold full-width left">Av. Aprígio Veloso, 882</h4>
                    <h4 class="font-bold full-width left">Campina Grande</h4>
                    <h4 class="font-bold full-width left">Paraíba, Brasil</h4>
                </div>
                
            </hgroup>

            <section class="ct-form left full-width">
                <?php echo do_shortcode('[contact-form-7 id="826" title="Formulário de contato"]'); ?>  
            </section>
        </article>
    </div><!-- //row -->
    <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>