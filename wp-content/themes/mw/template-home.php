<?php
/**
 * Template Name: Home page
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
        <div class="col-12 col-lg-6">
            <?php get_template_part( 'partials/slider', 'info' ); ?>            
        </div>        
    </div>

    <?php get_template_part( 'partials/list', 'product' ); ?>


    <div class="newsletter d-flex align-items-center mb-5 pt-5 pb-5">
        <div class="col-12 col-lg-6 pt-2">
            <div class="highlighted-block d-flex align-items-center justify-content-center">                
                <div class="col-12 col-lg-10 col-xl-9">            
                    <div class="content-header">
                        <div class="highlighted-header">
                            <h2 class="title">Iscriviti alla<br> nostra newsletter</h2>
                            <?php if( get_field('lista_dei_prodotti_sottotitolo') ) { ?>
                                <h3 class="subtitle">newsletter</h3>
                            <?php } ?>
                            <p class="small">* Campi obbligatori</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 pt-5 form-news">
            <?php echo do_shortcode( '[contact-form-7 id="48" title="Newsletter"]' ); ?>
        </div>
    </div>

    <div class="call-to-contatto bg-fixed d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10">
            <h2>Sei interessato a uno dei nostri prodotti?</h2>
            <a href="/contattaci" class="btn btn-white" title="CONTATTACI">CONTATTACI</a>
        </div>
    </div>
<?php endwhile; ?>

<?php
    get_footer();    
?>
