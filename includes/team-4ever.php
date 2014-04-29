<?php
/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_team_for_ever', 'request_team_for_ever' );
add_action( 'wp_ajax_request_team_for_ever', 'request_team_for_ever' );

function request_team_for_ever() {
    //$value = $_GET[]
    ?>
    <nav class="list-team left rel">
        <header class="full-width left">
            <h2 class="text-upp left for-ever-title">
                <span class="font-lite">LSD</span><br>
                <span class="font-bold">4ever</span>
            </h2>
        </header>

        <div class="group-list for-ever full-width abs">
            <ul class="small-block-grid-4">
                <?php 
                    $page = get_page_by_title('LSD4Ever');
                    $team = get_field('add_member_ever', $page->ID); 
                    foreach($team as $member):
                ?>
                <li>
                    <figure>
                        <div class="member-thumb" style="background-image: url(<?php echo $member['ever_photo']; ?>);"></div>
                        <figcaption class="text-center">
                            <p class="name"><?php echo $member['ever_name']; ?></p>
                            <p class="text-upp font-lite"><?php echo $member['ever_role']; ?></p>
                        </figcaption>
                    </figure>
                </li>
                <?php
                    endforeach;  
                ?>             
            </ul>
        </div>
    </nav>
    <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>