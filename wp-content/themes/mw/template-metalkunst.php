<?php
/**
 * Template Name: Metal Kunst 3
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

            <?php if( get_field('immagine_destra') ) { ?>
                <div class="d-flex row ml-0 mr-0 align-items-center mb-5">
                    <div class="col-12 col-lg-6">
                        <?php get_template_part( 'partials/highlighted', 'block' ); ?>
                    </div>
                    <div class="col-12 col-lg-6 pr-lg-0">
                        <?php get_template_part( 'partials/image', 'right' ); ?>
                    </div>        
                </div>
            <?php } else { ?>                
                <div class="highlighted-block d-flex row ml-0 mr-0 align-items-center justify-content-center pt-5">
                    <div class="col-12 col-lg-8 col-xl-5">
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

                <div class="highlighted-block d-flex row ml-0 mr-0 align-items-center justify-content-center">
                    <div class="col-12 col-lg-8 col-xl-5">
                        <div class="box-1-col">
                            <?php if( get_field('content_highlighted') ) { ?>
                                <?php echo get_field('content_highlighted'); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

            
        </div>
    </div>

    <?php $i = 1; if( get_field('gallery') ) { if( get_field('gallery') ) { ?>
    <div class="section-gallery bg-light-gray">
        <div class="highlighted-block d-flex align-items-center justify-content-center pt-5 bg-light-gray">        
            <div class="col-12 title-linee">
                <div class="content-header">
                    <div class="highlighted-header highlighted-center">
                        <h2 class="title">Gallery</h2>
                        <?php if( get_field('subtitle_highlighted') ) { ?>
                            <h3 class="subtitle">gallery</h3>
                        <?php } ?>
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

    <?php get_template_part( 'partials/list', 'metalkunst' ); ?>


    <div class="call-to-contatto d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10">
            <?php if( get_field('call_to_action_text') ) { ?>
                <h2><?php echo get_field('call_to_action_text'); ?></h2>
            <?php } else { ?>
                <h2>Sei interessato a una delle nostre strutture?</h2>
            <?php } ?>
            <a href="/contatti/" class="btn btn-white" title="CONTATTACI">CONTATTACI</a>
        </div>
    </div>
<?php endwhile; ?>

<?php
    get_footer();    
?>
