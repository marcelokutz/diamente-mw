<?php
/**
 * Template Name: Azienda
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page', 'header' ); ?>
    <div class="d-flex align-items-center mb-5">
        <div class="col-12 col-lg-6 pt-5">
            <?php get_template_part( 'partials/highlighted', 'block' ); ?>
        </div>
        <div class="col-12 col-lg-6 pr-0">
            <?php get_template_part( 'partials/image', 'right' ); ?>
        </div>        
    </div>
    <div class="box-qualita">
        <div class="bg-gray mb-5 pt-5">
            <div class="highlighted-block d-flex align-items-center justify-content-center pt-5">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="content-header">
                        <div class="highlighted-header">
                            <h2 class="title"><?php echo get_field('titolo_box_grigio'); ?></h2>
                            <?php if( get_field('sottotitolo_box_grigio') ) { ?>
                                <h3 class="subtitle"><?php echo get_field('sottotitolo_box_grigio'); ?></h3>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="highlighted-block d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="box-2-col text-white">
                        <?php if( get_field('testo_box_grigio') ) { ?>
                            <?php echo get_field('testo_box_grigio'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="highlighted-block d-flex align-items-center justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <?php if( get_field('immagine_box_grigio') ) {
                    echo '<figure class="image"><img src="';
                    echo get_field('immagine_box_grigio');
                    echo '" alt="" />';
                    echo '</figure>';
                }
                ?>
            </div>
        </div>
    </div>

    <?php $i = 1; if( get_field('lista_servizio') ) { if( get_field('lista_servizio') ) { ?>
        <div class="list-serv d-flex justify-content-center pt-5 pb-5">
            <div class="col-12 col-lg-10 col-xl-10 d-flex justify-content-around row">
                <?php while( has_sub_field('lista_servizio') ){ ?>
                    <div class="col-12 col-lg-5 item-<?php echo $i; ?>">
                        <div class="content-header">
                            <div class="highlighted-header">
                                <h2 class="title"><?php echo get_sub_field('titolo'); ?></h2>
                                <?php if( get_sub_field('sottotitolo') ) { ?>
                                    <h3 class="subtitle"><?php echo get_sub_field('sottotitolo'); ?></h3>
                                <?php } ?>
                            </div>
                            <?php if( get_sub_field('testo') ) { ?>
                                <?php echo get_sub_field('testo'); ?>
                            <?php } ?>
                        </div>
                    </div>
                <?php $i++; } ?>
            </div>
        </div>
    <?php } } ?>

<?php endwhile; ?>

<?php
    get_footer();    
?>
