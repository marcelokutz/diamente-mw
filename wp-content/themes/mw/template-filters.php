<?php
/**
 * Template Name: Filters
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

    <?php get_template_part( 'partials/secondary', 'content' ); ?>

    <?php $i = 1; if( get_field('prodotti') ) { if( get_field('prodotti') ) {?>
        <div class="highlighted-block d-flex row ml-0 mr-0 align-items-center justify-content-center pt-5 bg-light-gray">
            <div class="col-12 col-lg-5 title-linee">
                <div class="content-header">
                    <div class="highlighted-header highlighted-center">
                        <h2 class="title">Le nostre linee</h2>
                        <?php if( get_field('subtitle_highlighted') ) { ?>
                            <h3 class="subtitle">linee</h3>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="linee-slider">
                <?php while( has_sub_field('prodotti') ){ ?>
                    <?php $post_object = get_sub_field('prodotto'); ?>
                        <?php if( $post_object ): ?>
                            <div class="item">
                                <?php $post = $post_object; setup_postdata( $post ); ?>
                                <div class="row">
                                <div class="col-12 col-lg-5 title-prod">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="col-12 col-lg-7 img">                                
                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_field('prodotti_in_vetrina_immagine'); ?>" alt="<?php the_title(); ?>" /></a>
                                </div>
                                </div>
                                <?php wp_reset_postdata(); ?> 
                            </div>
                        <?php endif; ?> 
                <?php } ?>
                </div>
            </div>        
        </div>        
    <?php } } ?>

    <div class="call-to-contatto d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10">
            <h2>Sei interessato a uno dei nostri filtri?</h2>
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
