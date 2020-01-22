<section class="single-cta">
    <?php echo wp_get_attachment_image(get_sub_field('image'), 'landscape-desktop', 0, array('class' => 'cta-image')); ?>
    <div class="single-cta-content container">
        <div class="row">
            <div class="card col-10 offset-1 col-md-7 md-offset-0">
              <h2><?php the_sub_field('heading'); ?></h2>
              <p><?php the_sub_field('copy'); ?></p>
              <?php $link = get_sub_field('text_link'); ?>
              <a class="text-link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
            </div>
        </div>
    </div>
</section>
