<?php
/**
 * Template Name: Elevators
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page', 'header' ); ?>

    <div class="box-qualita">
        <div class="mb-5 pt-5">
            <div class="highlighted-block d-flex align-items-center justify-content-center pt-5">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="content-header">
                        <div class="highlighted-header">
                            <h2 class="title"><?php echo get_field('title_highlighted'); ?></h2>
                            <?php if( get_field('subtitle_highlighted') ) { ?>
                                <h3 class="subtitle"><?php echo get_field('subtitle_highlighted'); ?></h3>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="highlighted-block d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="box-2-col">
                        <?php if( get_field('content_highlighted') ) { ?>
                            <?php echo get_field('content_highlighted'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part( 'partials/list', 'product' ); ?>


    <div class="call-to-contatto bg-fixed d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10">
            <h2>Sei interessato a uno dei nostri prodotti?</h2>
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
