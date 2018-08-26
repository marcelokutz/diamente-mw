<?php
/**
 * Template Name: Download
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page', 'header' ); ?>

    <div class="d-flex row ml-0 mr-0 mb-5 pt-3 pb-5 download-header">
        <div class="col-12 col-lg-6 pt-0">
            <?php get_template_part( 'partials/highlighted', 'block' ); ?>
        </div>
        <div class="col-12 col-lg-6 pt-5 mt-5">
            <?php echo do_shortcode( '[contact-form-7 id="308" title="Download - form"]' ); ?>
        </div>        
    </div>

    <?php $i = 1; if( get_field('downloads') ) { if( get_field('downloads') ) { ?>
        <div class="list-downloads d-flex justify-content-center pt-5 pb-5" id="list-downloads">
            <div class="col-12 col-lg-10 col-xl-10 d-flex justify-content-around row">
                <?php while( has_sub_field('downloads') ){ ?>
                    <div class="text-center col-12 col-lg-4 mb-5 item-download disabled item-<?php echo $i; ?>">
                        <?php if( get_sub_field('file') ) { ?>
                            <div class="icon"><img src="/wp-content/themes/mw/assets/dist/images/metalworking-download-icon.svg" alt=""></div>
                            <h3 class="color"><?php echo get_sub_field('file')['title']; ?></h3>
                            <a href="<?php echo get_sub_field('file')['url']; ?>" title="<?php echo get_sub_field('file')['title']; ?>" download class="disabled">SCARICA</a>
                        <?php } ?>
                    </div>
                <?php $i++; } ?>
            </div>
        </div>
    <?php } } ?>

<?php endwhile; ?>


<?php
    get_footer();    
?>
