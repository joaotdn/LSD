<?php
/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_friends_list', 'request_friends_list' );
add_action( 'wp_ajax_request_friends_list', 'request_friends_list' );

function request_friends_list() {
    ?>
    <div class="row">
        <header class="friend-header">
            <h1 class="font-bold text-upp">Parceiros</h1>
        </header>

        <article class="friends-list abs">
            <ul class="inline-list">
            <?php 
                $page = get_page_by_title('Parceiros');
                $friends = get_field('friends_list', $page->ID); 
                foreach($friends as $friend):
            ?>
                <li class="small-9">
                    <h4 class="font-lite text-center full-width left"><?php echo $friend['friend_name']; ?></h4>
                    <p class="text-upp text-center"><a href="http://<?php echo $friend['friend_site']; ?>" title="<?php echo $friend['friend_name']; ?>" target="_blank" class="black font-lite font-14"><?php echo $friend['friend_site']; ?></a></p>
                </li>
            <?php
                endforeach;  
            ?>
            </ul>
        </article>
    </div><!-- //row -->
    <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>