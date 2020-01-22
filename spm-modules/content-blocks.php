<section class="content-blocks back-gradient">
    <div class="container">
        <h1 class="white"><?php the_sub_field('heading'); ?></h1>
        <div class="card-deck">
          <?php if( have_rows('cta_repeater') ) : ?>
          <?php while ( have_rows('cta_repeater') ) : the_row(); ?>

            <div class="card col-md-6">
                <div class="card-body">
                    <?php $learn= get_sub_field('learn_more'); if( $learn): ?>
                    <h3><a href="<?php echo $learn['url']; ?>" target="<?php echo $learn['target']; ?>"><?php the_sub_field('title'); ?></a></h3>
                    <?php endif; ?>
                    <p><?php the_sub_field('copy'); ?></p>
                    <ul>
                      <?php $learn= get_sub_field('learn_more'); if( $learn): ?>
                      <li><a href="<?php echo $learn['url']; ?>" target="<?php echo $learn['target']; ?>"><?php echo $learn['title']; ?></a></li>
                      <?php endif; ?>
                      <?php $download= get_sub_field('download_requirements'); if( $download): ?>
                      <li><a href="<?php echo $download['url']; ?>" target="<?php echo $download['target']; ?>"><?php echo $download['title']; ?></a></li>
                      <?php endif; ?>
                    </ul>
                </div>
            </div>

            <?php wp_reset_postdata(); ?>
            <?php endwhile; else: ?>
            <?php endif; ?>
        </div>
    </div>
</section>
