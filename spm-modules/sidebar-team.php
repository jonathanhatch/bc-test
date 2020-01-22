
<div class="sidebar-team">
    <?php echo wp_get_attachment_image(get_sub_field('image'), 'landscape-tablet', 0, array('class' => 'sidebar-image')); ?>
    <div class="pattern"></div>
    <h3 class="sidebar"><?php the_sub_field('heading'); ?></h3>
    <?php $link = get_sub_field('button'); if( $link ): ?>
      <a class="button hero-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
    <?php endif; ?>
</div>
