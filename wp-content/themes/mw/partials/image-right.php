<?php if( get_field('immagine_destra') ) {
    echo '<figure class="image-right"><img src="';
    echo get_field('immagine_destra');
    echo '" alt="" />';
    echo '</figure>';
}
?>

