<?php
/**
 * Article search
 */
add_action( 'wp_ajax_nopriv_request_team', 'request_team' );
add_action( 'wp_ajax_request_team', 'request_team' );

function request_team() {
    //$value = $_GET[]
    ?>
    <nav class="list-team left rel">
        <header class="full-width left text-center">
            <h1 class="font-lite text-italic text-upp">Equipe</h1>
        </header>

        <div class="group-list full-width abs">
            <ul class="small-block-grid-4">
                <?php 
                    $page = get_page_by_title('Equipe');
                    $team = get_field('add_member', $page->ID); 
                    foreach($team as $member):
                ?>
                <li>
                    <figure>
                        <div class="member-thumb" style="background-image: url(<?php echo $member['member_photo']; ?>);"></div>
                        <figcaption class="text-center">
                            <p class="text-upp font-lite"><?php echo $member['member_role']; ?></p>
                            <p class="name"><?php echo $member['member_name']; ?></p>
                            <span class="email font-lite"><?php echo $member['member_email']; ?></span>
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