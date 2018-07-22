<?php $i = 1; if( get_field('prodotti_lista') ) { if( get_field('prodotti_lista') ) { ?>
    <div class="content-header pt-5 mb-5">
        <div class="highlighted-header highlighted-center">
            <h2 class="title"><?php echo get_field('lista_dei_prodotti_titolo'); ?></h2>
            <?php if( get_field('lista_dei_prodotti_sottotitolo') ) { ?>
                <h3 class="subtitle"><?php echo get_field('lista_dei_prodotti_sottotitolo'); ?></h3>
            <?php } ?>
        </div>
    </div>
    <div class="d-flex row align-items-stretch">
        <?php while( has_sub_field('prodotti_lista') ){ ?>
            <?php if( get_sub_field('url_del_prodotto') ) {
                echo '<a href="';
                echo get_sub_field('url_del_prodotto');
                echo '">';
            } ?>
            <div class="col-12 col-lg-4 p-0 prodotti_lista-item">
                <?php
                if( get_sub_field('url_del_prodotto') ) {
                    echo '<a href="';
                    echo get_sub_field('url_del_prodotto');
                    echo '">';
                }
                if( get_sub_field('nome_del_prodotto') ) {
                    echo '<h3>';
                    echo get_sub_field('nome_del_prodotto');
                    echo '</h3>';
                }
                if( get_sub_field('immagine_del_prodotto') ) {
                    echo '<figure class="img"><img src="';
                    echo get_sub_field('immagine_del_prodotto');
                    echo '" alt="'. get_sub_field('nome_del_prodotto') .'" />';
                    echo '</figure>';
                }
                ?>
            </div>
            <?php if( get_sub_field('url_del_prodotto') ) {
                echo '</a>';
            } ?>
        <?php $i++; } ?>
    </div>
<?php } } ?>