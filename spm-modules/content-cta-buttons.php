<section class="cta-buttons">
    <div class="container">
        <div class="row">
            <div class="cta-buttons-content col-12 col-md-10 offset-md-1">
            <h2><?php the_sub_field('heading'); ?></h2>
            <?php if( have_rows('buttons') ) : ?>
            <ul>
            <?php while ( have_rows('buttons') ) : the_row(); ?>

                <?php $button = get_sub_field('button'); if( $button ): ?>
                    <li><a class="button" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a></li>
                <?php endif; ?>

            <?php endwhile; else: ?>
            </ul>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
