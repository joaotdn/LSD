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
            <div class="icon-map centered rel">
                <!-- 1º andar -->
                <?php $page = get_page_by_title('Visita Virtual'); ?>

                <?php $thumb = get_field('wc', $page->ID); if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark wc abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('triunfo', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark triunfo abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('carvalheira', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark carvalheira abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('ypioca', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark ypioca abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('hall', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark hall abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('recepcao', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark recepcao abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('sapupara', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark sapupara abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('serra_limpa', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark serra-limpa abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('engenho_do_meio', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-right mark eng-meio abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <!-- 2º andar -->
                <?php $thumb = get_field('serra_preta', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-left mark serra-preta abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('carucu', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-left mark carucu abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('volupia', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-left mark volupia abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('rainha', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-left mark rainha abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('dona_bica', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-left mark dona-bica abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('auditorio', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-left mark auditorio abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
                <?php $thumb = get_field('bruxaxa', $page->ID);  if($thumb): ?>
                    <div data-tooltip data-options="disable_for_touch:true" class="has-tip tip-left mark bruxaxa abs" title='<img src="<?php echo $thumb; ?>">'></div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <a class="close-reveal-modal">&#215;</a>
    <?php
    exit();
}
?>