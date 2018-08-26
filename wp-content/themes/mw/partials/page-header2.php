<?php if( get_field('header-image') ) { ?>
    <header class="page-header bg-fixed text-center d-flex align-items-center" <?php echo 'style="background-image: url('.get_field('header-image').');"'; ?> >
<?php } else { ?>
    <header class="page-header text-center d-flex align-items-center">    
<?php } ?>
    <div class="col-12">
        <?php if( get_field('header-subtitle') ) { ?>
            <h2 class="header-subtitle"><?php echo get_field('header-subtitle'); ?></h2>
        <?php } ?>
        <?php if( get_field('header-subtitle') ) { ?>
            <h1 class="header-title"><?php echo get_field('header-title'); ?></h1>
        <?php } else { ?>
            <h1 class="header-title"><?php the_title(); ?></h1>
        <?php } ?>       
    </div>
</header>