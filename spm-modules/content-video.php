<section class="success-story back-gradient">
  <div class="container">
    <h2 class="white">Success Stories</h2>
      <div class="success-content col-12">
        <div class="embed-responsive embed-responsive-16by9">
          <?php the_sub_field('video'); ?>
        </div>
        <div class="row">
        	<div class="col-12 col-lg-4"><h3 class="story"><?php the_sub_field('title'); ?></h3></div>
        	<div class="col-12 offset-lg-1 col-lg-7"><?php the_sub_field('description'); ?></div>
        </div>
      </div>
  </div>
</section>
