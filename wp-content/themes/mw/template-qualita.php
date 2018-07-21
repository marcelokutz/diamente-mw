<?php
/**
 * Template Name: Qualità
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

    <div class="pt-5">
        <div class="highlighted-block d-flex align-items-center justify-content-center pt-5">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="content-header">
                    <div class="highlighted-header">
                        <h2 class="title"><?php echo get_field('title_highlighted_2'); ?></h2>
                        <?php if( get_field('subtitle_highlighted_2') ) { ?>
                            <h3 class="subtitle"><?php echo get_field('subtitle_highlighted_2'); ?></h3>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="highlighted-block d-flex align-items-center justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="box-1-col">
                    <?php if( get_field('content_highlighted_2') ) { ?>
                        <?php echo get_field('content_highlighted_2'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center mb-1">
            <div class="col-12 pr-0">
                <?php get_template_part( 'partials/slider', 'info' ); ?>            
            </div>        
        </div>
    </div>
</div>

    

<?php endwhile; ?>

<?php
    get_footer();    
?>
