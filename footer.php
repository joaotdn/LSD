
    <!-- Modals -->
    <div id="post-modal" class="reveal-modal" data-reveal></div><!-- //post-modals -->

    <div id="article-modal" class="reveal-modal" data-reveal></div><!-- //article-modal -->

    <div id="thought-modal" class="reveal-modal" data-reveal></div><!-- //thought-modal -->

    <div id="article-page-modal" class="reveal-modal" data-reveal></div><!-- //article-page-modal -->

    <div id="friends-modal" class="reveal-modal" data-reveal></div><!-- //parceiros-modal -->
    
    <div id="oportunity-modal" class="reveal-modal" data-reveal></div><!-- //oportunity-modal -->

    <div id="team-modal" class="reveal-modal" data-reveal></div><!-- //Equipe modal -->

    <div id="teamever-modal" class="reveal-modal" data-reveal></div><!-- //Equipe 4ever modal -->

    <div id="tour-modal" class="reveal-modal" data-reveal></div><!-- //visita virtual -->

    <div id="clipping-modal" class="reveal-modal" data-reveal></div><!-- //visita virtual -->

    <div id="contact-modal" class="reveal-modal" data-reveal>
        <div class="row">
            <div class="abs post-thumb contact-map">
                <header class="post-header abs article">
                    <h1 class="text-upp font-lite full-width left text-center ct">Contato</h1>
                </header>
                
            </div>

            <article class="left post-content contact-content abs">
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
    </div><!-- //contatos -->

    <div id="search-modal" class="reveal-modal" data-reveal>
            <nav class="list-team left rel">
            <header class="search-header full-width left">
                <h2 class="font-bold text-upp">Buscar</h2>
            </header>

            <form action="" class="search-form">
                <label for=""><input type="text" id="search-field" name="search-field" autofocus></label>
            </form>

            <section class="search-result full-width abs">
            </section>
        </nav>
    <a class="close-reveal-modal">&#215;</a>
    </div><!-- //Search modal -->
    
    <div id="english-page-modal" class="reveal-modal" data-reveal></div><!-- //English modal -->
    <!-- //Modals -->

    <!-- Preloading -->
    <div id="jSplash" style="z-index: 9999999; width: 100%; position: relative; text-align: center;">
        <!--<img src="<?php //echo get_template_directory_uri(); ?>/images/Preloader_3.gif" alt="">-->
    </div>
    
    <script>
      //<![CDATA[
      var getData = {
        'urlDir':'<?php bloginfo('template_directory'); ?>/',
        'ajaxDir':'<?php echo stripslashes(get_admin_url()).'admin-ajax.php'; ?>'
      }
      //]]>
    </script>

    <?php wp_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <script>
        $(document).ready(function() {

            $('html, body, *').mousewheel(function(e, delta) {
                this.scrollLeft -= (delta * 30);
                e.preventDefault();
            });




        });

        $(document).on('click','.ui-autocomplete a',function(e) {
                e.preventDefault();
                console.log(e.type);
            });
    </script>
    <div id="fb-root"></div>
</body>
</html>