<?php
/**
 * Template Name: Filters
 *
 */
?>

<?php
    get_header();    
?>

<?php if ( have_posts() ) : ?>
		<header class="page-header bg-fixed text-center d-flex align-items-center">
            <div class="col-12">
                <?php
                    echo '<h1 class="header-title">News</h1>';
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </div>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">

            <div class="content-header pt-5 mb-5">
                <div class="highlighted-header highlighted-center">
                    <h2 class="title">Ultime novità dal mondo Metal Working </h2>
                    <h3 class="subtitle">news</h3>
                </div>
            </div>

        <?php if ( have_posts() ) : ?>
            <div class="d-flex row ml-0 mr-0">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="itens-news col-12 col-lg-4 pl-0 pr-0 mb-5">
                        <div class="row m-0">
                            <div class="img">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <div class="col-12">
                                <h2>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="color"><?php the_title(); ?></a>
                                </h2>
                                <div class="description">
                                    <?php the_excerpt(); ?>
                                </div>
                                <p class="date"><?php the_time('d F Y'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="news-nav">
                <?php posts_nav_link('','Pagina precedente','Pagina successiva'); ?>
            </div>
        <?php endif; ?>

	</div><!-- #primary -->

<?php
    get_footer();    
?>
