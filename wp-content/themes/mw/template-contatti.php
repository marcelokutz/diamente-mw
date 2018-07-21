<?php
/**
 * Template Name: Contatti
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="map">
        <div id="map"></div>
    </div>
    <div class="d-flex align-items-center mb-5 pt-5 pb-5">
        <div class="col-12 col-lg-6 pt-5">
            <?php get_template_part( 'partials/highlighted', 'block' ); ?>
        </div>
        <div class="col-12 col-lg-6">
            <?php echo do_shortcode( '[contact-form-7 id="281" title="Contatti"]' ); ?>
        </div>        
    </div>


<?php endwhile; ?>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<script type='text/javascript'>
    function init_map() {
        var stylez = [
            {
            featureType: "all",
            elementType: "all",
            stylers: [
                { saturation: -100 } // <-- THIS
            ]
            }
        ];
        var myOptions = {
            zoom: 17,
            center: new google.maps.LatLng(46.0684246, 11.2266643), 
            mapTypeId: google.maps.MapTypeId.ROADMAP 
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);
        marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(46.0684246, 11.2266643) });
        //infowindow = new google.maps.InfoWindow({ content: '<strong>Metal Working</strong>' });
        //google.maps.event.addListener(marker, 'click', function() { infowindow.open(map, marker); });
        //infowindow.open(map, marker);
        var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });
        map.mapTypes.set('map', mapType);
        map.setMapTypeId('map');
        
    } 
    google.maps.event.addDomListener(window, 'load', init_map);


</script>
<?php
    get_footer();    
?>
