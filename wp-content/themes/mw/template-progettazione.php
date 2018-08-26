<?php
/**
 * Template Name: Progettazione
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page', 'header' ); ?>
    <div class="d-flex row ml-0 mr-0 align-items-center mb-5">
        <div class="col-12 col-lg-6 pt-5 z1">
            <?php get_template_part( 'partials/highlighted', 'block' ); ?>
        </div>
        <div class="col-12 col-lg-6 pr-0 z2">
            <?php get_template_part( 'partials/image', 'right' ); ?>
        </div>        
    </div>

    <?php $i = 1; if( get_field('foto_e_testo') ) { if( get_field('foto_e_testo') ) { ?>
        <div class="bg-light-gray list-tecnology d-flex row justify-content-center mb-5">
            <?php while( has_sub_field('foto_e_testo') ){ ?>
                <div class="col-12 col-xl-6 pt-0 pb-0 item">
                    <div class="d-flex row ml-0 mr-0 align-items-center justify-content-center">
                        <?php if( get_sub_field('immagine') ) {
                            echo '<figure class="image col-12 col-md-6 col-lg-5 p-0 mb-lg-0"><img src="';
                            echo get_sub_field('immagine');
                            echo '" alt="" />';
                            echo '</figure>';
                        } ?>
                        <?php if( get_sub_field('testo') ) { ?>
                            <div class="col-12 col-md-6 col-lg-7 p-5">
                                <?php echo get_sub_field('testo'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php $i++; } ?>
        </div>
    <?php } } ?>

    <?php get_template_part( 'partials/secondary', 'content' ); ?>
    

<?php endwhile; ?>

<?php
    get_footer();    
?>
