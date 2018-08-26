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
    <div class="d-flex row align-items-center mb-5">
        <div class="col-12 col-lg-6 pt-5 position-relative z1">
            <?php get_template_part( 'partials/highlighted', 'block' ); ?>
        </div>
        <div class="col-12 col-lg-6 position-relative z2">
            <?php get_template_part( 'partials/slider', 'info' ); ?>            
        </div>        
    </div>

    <?php get_template_part( 'partials/list', 'product' ); ?>


    <div class="newsletter d-flex row align-items-center mb-5 pt-5 pb-5">
        <div class="col-12 col-lg-6 pt-2 pl-3 pr-5">
            <div class="highlighted-block d-flex align-items-center justify-content-center">                
                <div class="col-12 col-lg-10 col-xl-9">            
                    <div class="content-header">
                        <div class="highlighted-header">
                            <?php if ( ICL_LANGUAGE_CODE == 'en' ) { ?>
                                <h2 class="title">Sign up to<br> our newsletter</h2>
                            <?php } else if ( ICL_LANGUAGE_CODE == 'de' ) { ?>
                                <h2 class="title">Registriere dich<br> für unseren Newsletter</h2>
                            <?php } else if ( ICL_LANGUAGE_CODE == 'fr' ) { ?>
                                <h2 class="title">Abonnez-vous à<br> notre lettre d'information</h2>
                            <?php } else { ?>
                                <h2 class="title">Iscriviti alla<br> nostra newsletter</h2>
                            <?php }  ?>        
                            <?php if( get_field('lista_dei_prodotti_sottotitolo') ) { ?>
                                <h3 class="subtitle">newsletter</h3>
                            <?php } ?>
                            <p class="small">* Campi obbligatori</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 pt-5 pr-5 pl-5 form-news">
            <?php if ( ICL_LANGUAGE_CODE == 'en' ) {
                echo do_shortcode( '[contact-form-7 id="563" title="Newsletter_en"]' );
            } else if ( ICL_LANGUAGE_CODE == 'de' ) {
                echo do_shortcode( '[contact-form-7 id="564" title="Newsletter_de"]' );
            } else {
                echo do_shortcode( '[contact-form-7 id="48" title="Newsletter"]' );
            } ?>            
        </div>
    </div>

    <div class="call-to-contatto bg-fixed d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10">
            <h2>
                <?php if ( ICL_LANGUAGE_CODE == 'en' ) {
                        echo 'Are you interested in one of our products?';
                    } else if ( ICL_LANGUAGE_CODE == 'de' ) {
                        echo 'Sind Sie an einem unserer Produkte interessiert?';
                    } else if ( ICL_LANGUAGE_CODE == 'fr' ) {
                        echo "Êtes-vous intéressé par l'un de nos produits?";
                    } else {
                      echo 'Sei interessato a uno dei nostri prodotti?';
                    }
                ?>
            </h2>
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
