<section class="locations back-gradient">
    <div class="container">
        <h1 class="white"><?php the_title(); ?></h1>
        <div class="card-deck">
          <?php if( have_rows('location') ) : ?>
          <?php while ( have_rows('location') ) : the_row(); ?>

            <div class="card col-md-6 col-lg-3">
                <?php echo wp_get_attachment_image(get_sub_field('image'), 'landscape-tablet', 0, array('class' => 'card-img-top')); ?>
                <div class="card-body">
                    <h3><a href="<?php the_sub_field('maps'); ?>"><?php the_sub_field('name'); ?></a></h3>
                    <p><?php the_sub_field('address'); ?></p>
                    <p><a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a></p>
                </div>
            </div>

            <?php endwhile; else: ?>
            <?php endif; ?>
        </div>
    </div>
</section>
