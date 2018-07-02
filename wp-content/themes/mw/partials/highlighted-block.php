<div class="highlighted-block d-flex align-items-center justify-content-center">    
    <div class="col-12 col-lg-10 col-xl-9">
        <div class="highlighted-header">
            <h2 class="title"><?php echo get_field('title_highlighted'); ?></h2>
            <?php if( get_field('subtitle_highlighted') ) { ?>
                <h3 class="subtitle"><?php echo get_field('subtitle_highlighted'); ?></h3>
            <?php } ?>
        </div>
        <?php if( get_field('content_highlighted') ) { ?>
            <?php echo get_field('content_highlighted'); ?>
        <?php } ?>
    </div>
</div>