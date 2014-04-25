<?php
/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_article_search', 'request_article_search' );
add_action( 'wp_ajax_request_article_search', 'request_article_search' );

function request_article_search() {
    //$value = $_GET[]
    ?>
    <section class="select-options abs">
        <header class="small-18 left text-center">
            <h1 class="text-upp font-bold">Artigos</h1>
        </header>

        <form action="" class="article-options">
            <div class="row">
                <div class="small-16 small-push-1">
                    <h3 class="text-upp white font-bold full-width left">Por autor</h3>
                    <?php
                        $terms = get_terms( 'autores', array('hide_empty' => false) );
                    ?>
                    <select name="select-author" id="select-author" class="small-18 columns">
                        <?php
                            foreach ($terms as $term):
                        ?>
                            <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <h3 class="text-upp white font-bold full-width left">Por ano</h3>
                    <?php
                        //$terms = get_terms( 'article_year', array('hide_empty' => false) );
                        $years = get_meta_values( 'article_year', 'artigos' );
                    ?>
                    <select name="select-author" id="select-author" class="small-18 columns">
                        <?php
                            foreach ($years as $year):
                        ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <h3 class="text-upp white font-bold full-width left">Por tag</h3>
                    <nav class="article-tags">
                        <ul class="no-bullet small-18 columns">
                            <?php $terms = get_terms( 'tags', array('hide_empty' => false) ); ?>
                            <?php
                                foreach ($terms as $term):
                            ?>
                                <li class="small-6 left"><a href="#" data-tagslug="<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </form>
    </section><!-- //select-options -->

    <nav class="article-list abs">
        <ul class="no-bullet full-width left">
            <li>
                <span class="full-width left text-upp red font-12 font-bold"><time>2014</time> <a href="#" class="article-pdf black" style="margin-left:10px;">Download PDF</a></span>
                <h4 class="full-width left font-lite">
                    <a href="#" title="" class="black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, laudantium accusantium</a>
                </h4>
                <p class="article-authors font-bold">por <a href="">Joao Teodoro, Max Josino</a></p>
                <p class="locality text-italic">J. Braz. Comp. Soc. 20(1): 1-16 (2014)</p>
                <p class="categories text-app">P2P / PARCEIROS / VISITA VIRTUAL</p>
            </li>
        </ul>
    </nav>
    <a class="close-reveal-modal">&#215;</a>

    <?php
    exit();
}

/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_article_list_query', 'request_article_list_query' );
add_action( 'wp_ajax_request_article_list_query', 'request_article_list_query' );

function request_article_list_query() {
    $field_value = $_GET['field_value'];

    ?>
    <ul class="no-bullet full-width left">
        <li>
            <span class="full-width left text-upp red font-12 font-bold"><time>2014</time> <a href="#" class="article-pdf black" style="margin-left:10px;">Download PDF</a></span>
            <h4 class="full-width left font-lite">
                <a href="#" title="" class="black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, laudantium accusantium</a>
            </h4>
            <p class="article-authors font-bold">por <a href="">Joao Teodoro, Max Josino</a></p>
            <p class="locality text-italic">J. Braz. Comp. Soc. 20(1): 1-16 (2014)</p>
            <p class="categories text-app">P2P / PARCEIROS / VISITA VIRTUAL</p>
        </li>
    </ul>
    <?php
    exit();
}
?>