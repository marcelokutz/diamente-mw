<?php
/**
 * Template Name: Elevators Product
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page', 'header' ); ?>

    <?php $i = 1; if( get_field('prodotto_dettaglio') ) { if( get_field('prodotto_dettaglio') ) { ?>
        <?php while( has_sub_field('prodotto_dettaglio') ){ ?>
            <div class="d-flex row ml-0 mr-0 align-items-center pt-5 mb-5 pb-5">
                <div class="col-12 col-lg-6 pt-5 <?php if($i == 1) { echo 'order-1'; } else { echo 'order-2'; } ?>">
                    <div class="highlighted-block d-flex row ml-0 mr-0 align-items-center <?php if($i == 1) { echo 'justify-content-center'; } else { echo 'justify-content-left'; } ?>">
                        <div class="col-12 col-lg-10 col-xl-9">
                            <div class="highlighted-header">
                                <?php if( get_sub_field('titolo') ) { ?>
                                    <h2 class="title"><?php echo get_sub_field('titolo'); ?></h2>
                                <?php } ?>
                                <?php if( get_sub_field('sottotitolo') ) { ?>
                                    <h3 class="subtitle"><?php echo get_sub_field('sottotitolo'); ?></h3>
                                <?php } ?>
                            </div>
                            <?php if( get_sub_field('testo') ) { ?>
                                <?php echo get_sub_field('testo'); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 <?php if($i == 1) { echo 'order-2'; } else { echo 'order-1'; } ?>">
                    <div class="highlighted-block d-flex align-items-center justify-content-left">
                        <div class="col-12 col-lg-10">
                            <?php if( get_sub_field('immagine') ) {
                                echo '<figure class="image image-right"><img src="';
                                echo get_sub_field('immagine');
                                echo '" alt="" />';
                                echo '</figure>';
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php $i++; } ?>

    <?php } } ?>

    <?php $i = 1; if( get_field('gallery') ) { if( get_field('gallery') ) { ?>
    <div class="section-gallery bg-light-gray">
        <div class="highlighted-block d-flex align-items-center justify-content-center pt-5 bg-light-gray">        
            <div class="col-12 title-linee">
                <div class="content-header">
                    <div class="highlighted-header highlighted-center">
                        <h2 class="title">Gallery</h2>
                        <h3 class="subtitle">gallery</h3>
                    </div>
                </div>
            </div>
        </div>
            <div class="gallery d-flex align-items-center pt-5 mb-1 pb-5">        
                <?php while( has_sub_field('gallery') ){ ?>
                    <div class="item-gallery">
                        <?php if( get_sub_field('immagine') ) {
                            echo '<figure class="image">';
                            echo '<a href="';
                            echo get_sub_field('immagine');
                            echo '"><img src="';
                            echo get_sub_field('immagine');
                            echo '" alt="" /></a>';
                            echo '</figure>';
                        } ?>
                    </div>
                <?php $i++; } ?>
            </div>
    </div>

    <?php } } ?>

    <?php get_template_part( 'partials/list', 'product' ); ?>


    <div class="call-to-contatto bg-fixed d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10">
            <h2>Sei interessato a una delle nostre strutture?</h2>
            <?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
                <a href="/contatti/" class="btn btn-white" title="CONTACT">CONTACT</a>
            <?php } else if ( ICL_LANGUAGE_CODE == 'de' ) { ?>
                <a href="/contatti/" class="btn btn-white" title="KONTAKT">KONTAKT</a>
            <?php } else if ( ICL_LANGUAGE_CODE == 'fr' ) { ?>
                <a href="/contatti/" class="btn btn-white" title="CONTACT">CONTACT</a>
            <?php } else { ?>
                <a href="/contatti/" class="btn btn-white" title="CONTATTACI">CONTATTACI</a>
            <?php }  ?>    
        </div>
    </div>
<?php endwhile; ?>

<?php
    get_footer();    
?>
