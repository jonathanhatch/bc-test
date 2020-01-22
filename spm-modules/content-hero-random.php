<div class="container">
  <div class="row">
    <section class="hero" aria-labelledby="hero-title" aria-describedby="hero-copy">
        <?php echo wp_get_attachment_image(get_sub_field('image'), 'landscape-tablet', 0, array('class' => 'hero-image')); ?>
        <div class="hero-pattern col-12 d-md-none"></div>
        <div class="hero-content col-12 col-md-5 col-lg-4">
                <h1 id="hero-title"><?php the_sub_field('heading'); ?></h1>
                <div id="hero-copy"><p><?php the_sub_field('copy'); ?></p></div>
                <?php $link = get_sub_field('button'); if( $link ): ?>
                  <a class="button hero-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                <?php endif; ?>
        </div>
    </section>
  </div>
</div>
<div class="hero-pattern d-md-block"></div>
