
<section class="success-story back-gradient">
  <div class="container">
    <h2 class="white">Success Stories</h2>
      <?php $post_object = get_sub_field('selection'); if( $post_object ): ?>
        <?php $post = $post_object; setup_postdata( $post ); ?>
        <div class="success-content col-12">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('landscape-tablet'); ?></a>
          <div class="row">
          	<div class="col-12 col-lg-4"><h3 class="story"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
          	<div class="col-12 offset-lg-1 col-lg-7"><?php the_excerpt(); ?></div>
          </div>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
  </div>
</section>
