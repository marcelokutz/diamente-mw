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
    <?php get_template_part( 'partials/news', 'header' ); ?>
    <div class="post-content d-flex align-items-center justify-content-center pt-5">
        <div class="col-12 col-lg-10 col-xl-8">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>

<?php
    get_footer();    
?>
