<?php $i = 1; if( get_field('metal_kunst_3_elenco') ) { if( get_field('metal_kunst_3_elenco') ) { ?>
    <div class="list-metalkunst d-flex row align-items-stretch ml-0 mr-0">
    
        <?php while( has_sub_field('metal_kunst_3_elenco') ){ ?>
            <?php
                //var_dump(get_sub_field('pagine'))
            ?>
            <?php
                $pagine = get_sub_field('pagine');
                $pageUrl = get_permalink($pagine->ID);
                $pageTitle = $pagine->post_title;
                $autor = get_field('header-subtitle', $pagine->ID);
            ?>
            <div class="col-12 col-md-4 p-0 prodotti_lista-item">
                <?php
                    echo '<a href="';
                    echo $pageUrl;
                    echo '">';
                    if( $pageTitle ) {
                        echo '<h3>';
                        echo $pageTitle;
                        echo '</h3>';
                    }
                    if( get_sub_field('immagine') ) {
                        echo '<figure class="img"><img src="';
                        echo get_sub_field('immagine');
                        echo '" alt="'. $pageTitle .'" />';
                        echo '</figure>';
                    }
                    echo '<div class="info-box">';
                    echo '<h2>' . $pageTitle . '</h2>';
                    echo '<p class="more">SCOPRI DI PIÙ</p>';
                    echo '</div>';
                ?>
                <?php
                    echo '</a>';
                ?>
            </div>
        <?php $i++; } ?>
    </div>
<?php } } ?>