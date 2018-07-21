<?php $i = 1; if( get_field('contenuto_secondario') ) { if( get_field('contenuto_secondario') ) { ?>
    <?php while( has_sub_field('contenuto_secondario') ){ ?>    
        <div class="d-flex align-items-center mb-5 secondary-content">
            <div class="col-12 col-lg-6 pt-5 z1">
                <div class="highlighted-block d-flex align-items-center justify-content-center">    
                    <div class="col-12 col-lg-10 col-xl-9">
                        <div class="highlighted-header">
                            <h2 class="title"><?php echo get_sub_field('title'); ?></h2>
                            <?php if( get_sub_field('subtitle') ) { ?>
                                <h3 class="subtitle"><?php echo get_sub_field('subtitle'); ?></h3>
                            <?php } ?>
                        </div>
                        <?php if( get_sub_field('content') ) { ?>
                            <?php echo get_sub_field('content'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pl-0 pr-0 z2">
                <?php if( get_sub_field('immagine_destra') ) {
                        echo '<figure class="image-right"><img src="';
                        echo get_sub_field('immagine_destra');
                        echo '" alt="" />';
                        echo '</figure>';
                    }
                ?>
            </div>        
        </div>
    <?php $i++; } ?>    
<?php } } ?>    