<?php
add_action( 'wp_ajax_nopriv_request_search_results', 'request_search_results' );
add_action( 'wp_ajax_request_search_results', 'request_search_results' );

function request_search_results() {
    ?>
    <h6 class="font-lite text-upp full-width left bd">Resultados</h6>
    <ul class="no-bullet full-width left search-results">
        <li>
            <h6 class="font-lite text-upp full-width left"><a href="" class="black">Artigos / Clipping</a></h6>
            <p class="full-width left">
                <a href="#" title="" class="black font-lite font-14">
                    <span class="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                    <span class="icon-go left display-block"></span>
                </a>
            </p>
        </li>
    </ul>
    <?php
    exit();
}

?>