    <?php $i = 1; if( get_field('slider') ) { if( get_field('slider') ) { ?>
        <div class="slider-info d-flex align-items-stretch">
            <?php while( has_sub_field('slider') ){ ?>
                <div class="item align-self-stretch"">
                        <?php
                            echo '<figure class="icon row d-flex align-items-center"><div class="col-5"><img src="';
                            echo get_sub_field('icon');
                            echo '" alt="" />';
                            echo '</div><div class="col-7 icon-arrow"></div></figure>';
                            if( get_sub_field('content_slider') ) {
                                echo get_sub_field('content_slider');
                            }
                        ?>
                </div>
            <?php $i++; } ?>
        </div>
    <?php } } ?>
