<?php
/**
 * Visita virtual
 */
add_action( 'wp_ajax_nopriv_request_english', 'request_english' );
add_action( 'wp_ajax_request_english', 'request_english' );

function request_english() {
    //$value = $_GET[]
    ?>
    <div class="row">
        <div class="abs post-thumb" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-english.jpg);"></div>
                
        <section class="english-body left rel">
                <header class="left full-width">
                    <h3 class="text-upp font-bold">English</h3>
                </header>

                <article class="p-regular abs full-width english-text">
                    <p class="font-regular">Welcome to the website of the Distributed Systems Laboratory at Federal University of Campina Grande, Brazil!
                            Maintaining an updated English version of our website has proven over the years to be impossible. At the same time, automatic translation tools embedded in some browsers have improved quite a lot, and usually do a great job. If you don’t understand Portuguese, we ask you to use this feature to translate our site to English as you navigate on it.</p>
                    <p class="font-regular">If you’re unable to use automatic translation, it is possible that you’ll still be able to get what you’re looking for, since some of the most important pages can be read without much problem. For instance our scientific publications are mostly in English. We here give you a translation of the items in the main menu in the left-hand side of the site to help you find your way:</p>

                    <nav class="english-sections full-width left">
                        <ul class="inline-list full-width left">
                            <li class="small-9 columns">
                                <a href="#" title="Clipping" class="display-block left full-width" data-reveal-id="clipping-modal" data-reveal>
                                    <h6 class="text-upp blue-lite">Clipping</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="Equipe" class="display-block left full-width" data-reveal-id="team-modal" data-reveal>
                                    <h6 class="text-upp blue-lite">Equipe</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="LSD4Ever" class="display-block left full-width" data-reveal-id="teamever-modal" data-reveal>
                                    <h6 class="text-upp blue-lite">LSD4Ever</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="Oportunidades" class="display-block left full-width" data-reveal-id="oportunity-modal" data-reveal>
                                    <h6 class="text-upp blue-lite">Oportunidades</h6>
                                    <p>Texto descritivo</p>
                                 </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="Parceiros" class="display-block left full-width" data-reveal-id="friends-modal" data-reveal>
                                    <h6 class="text-upp blue-lite">Parceiros</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="Visita Virtual" class="display-block left full-width" data-reveal-id="tour-modal" data-reveal>
                                    <h6 class="text-upp blue-lite">Visita Virtual</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="Artigos" class="display-block left full-width" data-reveal-id="article-page-modal" data-reveal>
                                    <h6 class="text-upp blue-lite">Artigos</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="Projetos" class="display-block left full-width">
                                    <h6 class="text-upp blue-lite">Projetos</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="Pensadouro" class="display-block left full-width">
                                    <h6 class="text-upp blue-lite">Pensadouro</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns">
                                <a href="#" title="Fale Conosco" class="display-block left full-width" data-reveal-id="contact-modal" data-reveal>
                                    <h6 class="text-upp blue-lite">Fale Conosco</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>

                            <li class="small-9 columns end">
                                <a href="#" title="Imprensa" class="display-block left full-width" >
                                    <h6 class="text-upp blue-lite">Imprensa</h6>
                                    <p>Texto descritivo</p>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <p class="font-regular font-14">If you can’t find what you’re looking for, we apologize and ask you to drop us a message… We will be happy to provide the information you need.
                        Have a good time browsing our website!</p>
                </article>
            </section>

        </div><!-- //row -->
        <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>