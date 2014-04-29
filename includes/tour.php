<?php
/**
 * Visita virtual
 */
add_action( 'wp_ajax_nopriv_request_tour', 'request_tour' );
add_action( 'wp_ajax_request_tour', 'request_tour' );

function request_tour() {
    //$value = $_GET[]
    ?>
    <nav class="virtual-tour left rel">
        <header class="full-width left text-center">
            <h1 class="font-bold text-upp text-center">Visita Virtual</h1>
            <h6 class="text-center full-width left">Passe o mouse</h6>
        </header>

        <div class="tour-map full-width left">
            <div class="icon-map centered"></div>
        </div>
    </nav>
    <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>