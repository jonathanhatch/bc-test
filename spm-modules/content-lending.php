<section class="lending-content">

  <?php if( have_rows('tiers') ) : ?>
  <?php $count = 0; ?>
  <?php while ( have_rows('tiers') ) : the_row(); ?>

    <div class="lending-block lending-block-<?php echo $count; ?>">
        <div class="lending-block-heading">
          <h3><?php the_sub_field('heading'); ?></h3>
          <p><?php the_sub_field('description'); ?></p>
        </div>
        <div class="lending-block-content">
          <?php the_sub_field('information'); ?>
          <?php $link = get_sub_field('requirements'); if( $link ): ?>
          <a class="lending-block-requirements" href="<?php the_sub_field('requirements'); ?>">Download Requirements</a>
          <?php endif; ?>
        </div>
    </div>

  <?php $count = get_row_index('tiers'); ?>
  <?php endwhile; else: ?>
  <?php endif; ?>

  <script>
      jQuery(document).ready(function($) {
          $('.lending-block').click(function(event){
              $(this).children('.lending-block-content').slideToggle("fast");
              $(this).siblings().children('.lending-block-content').hide();
              event.stopPropagation();
          });
      });
  </script>

</section>
