<?php
/**
 * The template for displaying the footer.
 *
 * @package Total WordPress Theme
 * @subpackage Templates
 * @version 4.3
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

			<?php wpex_hook_main_bottom(); ?>

		</main><!-- #main-content -->

		<?php wpex_hook_main_after(); ?>

		<?php wpex_hook_wrap_bottom(); ?>

	</div><!-- #wrap -->

	<?php wpex_hook_wrap_after(); ?>

</div><!-- #outer-wrap -->

<?php wpex_outer_wrap_after(); ?>

<?php wp_footer(); ?>
<script type="text/javascript" src="/wp-content/themes/mw/assets/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/mw/assets/dist/js/slick.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/mw/assets/dist/js/slick-lightbox.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/mw/assets/dist/js/jscookie.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/mw/assets/dist/js/main.min.js"></script>


<script>
	jQuery(document).ready(function($){
	  jQuery(".pulse_marker").on('click',function(){
	    // jQuery(".bonta-info").toggleClass("active");
	    jQuery(this).find(".pulse_rays").toggleClass("off");
	    jQuery(this).find(".x").toggleClass("active");
	    jQuery(this).find(".x").toggleClass("active");
	    jQuery(this).parent().parent().find(".box_info").toggleClass("active-1");
	  });
	});
</script>
<script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
      if ( '751' == event.detail.contactFormId ) {
		Cookies.set('enable-download', true, { expires: 1 });
		$('.item-download').removeClass('disabled');
		$('.item-download a').removeClass('disabled');
		$('html,body').animate({
			scrollTop: $('#list-downloads').offset().top
		}, 500);
      }

      if ( '752' == event.detail.contactFormId ) {
		Cookies.set('enable-download', true, { expires: 1 });
		$('.item-download').removeClass('disabled');
		$('.item-download a').removeClass('disabled');
		$('html,body').animate({
			scrollTop: $('#list-downloads').offset().top
		}, 500);
      }

      if ( '753' == event.detail.contactFormId ) {
		Cookies.set('enable-download', true, { expires: 1 });
		$('.item-download').removeClass('disabled');
		$('.item-download a').removeClass('disabled');
		$('html,body').animate({
			scrollTop: $('#list-downloads').offset().top
		}, 500);
      }

      if ( '308' == event.detail.contactFormId ) {
		Cookies.set('enable-download', true, { expires: 1 });
		$('.item-download').removeClass('disabled');
		$('.item-download a').removeClass('disabled');
		$('html,body').animate({
			scrollTop: $('#list-downloads').offset().top
		}, 500);
      }
      
  }, false );

  	if(Cookies.get('enable-download')){
        setTimeout(function() {
            $('.item-download').removeClass('disabled');
            $('.item-download a').removeClass('disabled');
        }, 1);
    }
</script>
</body>
</html>