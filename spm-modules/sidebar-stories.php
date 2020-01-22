
<div class="sidebar-stories">
    <h3 class="sidebar"><?php the_field('sidebar_stories', 'option'); ?></h3>
    <?php $post_objects = get_sub_field('selection'); if( $post_objects ): ?>
    <?php foreach( $post_objects as $post): ?>
    <?php setup_postdata($post); ?>
        <div class="sidebar-stories-content">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('landscape-tablet'); ?></a>
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php the_excerpt(); ?>
        </div>

      <?php endforeach; ?>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>
</div>
