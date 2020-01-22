<section class="content-cta-drop back-gray">
    <div class="container">

          <div class="card-group">
            <?php $count = 0; ?>
            <?php if( have_rows('cta_item') ) : ?>
            <?php while ( have_rows('cta_item') ) : the_row(); ?>

            <div class="card card-<?php echo $count; ?> col-md-4">
                <div class="card-body">
                    <h3><?php the_sub_field('name'); ?></h3>
                    <p><?php the_sub_field('copy'); ?></p>
                </div>
                <div class="card-background"></div>
            </div>
            <div class="card-content card-content-<?php echo $count; ?> d-md-none row">
                <div class="card-content-description col-12 col-md-4">
                    <h2><?php the_sub_field('heading'); ?></h2>
                    <p><?php the_sub_field('pitch'); ?></p>
                    <ul>
                    <?php $button = get_sub_field('button'); if( $button ): ?>
                        <li><a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a></li>
                    <?php endif; ?>
                    <?php $button2 = get_sub_field('button_2'); if( $button2 ): ?>
                        <li><a href="<?php echo $button2['url']; ?>"><?php echo $button2['title']; ?></a></li>
                    <?php endif; ?>
                    <?php $button3 = get_sub_field('button_3'); if( $button3 ): ?>
                        <li><a href="<?php echo $button3['url']; ?>"><?php echo $button3['title']; ?></a></li>
                    <?php endif; ?>
                  </ul>
                </div>
                <?php $post_object = get_sub_field('case'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                <div class="card-content-image col-md-4"><?php echo get_the_post_thumbnail(); ?></div>
                <div class="card-content-case col-12 col-md-4">
                    <h2><?php echo get_the_title(); ?></h2>
                    <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read Story</a>
                </div>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <?php $count = get_row_index('cta_item'); ?>
            <?php endwhile; else: ?>
            <?php endif; ?>
        </div>
        <div class="card-group d-none d-md-block">
          <?php $count = 0; ?>
          <?php if( have_rows('cta_item') ) : ?>
          <?php while ( have_rows('cta_item') ) : the_row(); ?>
          <div id="card-group-desktop-<?php echo $count; ?>" class="card-content card-content-<?php echo $count; ?> row">
            <div class="row">
              <div class="card-content-description col-12 col-md-6">
                  <h2><?php the_sub_field('heading'); ?></h2>
                  <p><?php the_sub_field('pitch'); ?></p>
                  <ul>
                  <?php $button = get_sub_field('button'); if( $button ): ?>
                      <li><a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a></li>
                  <?php endif; ?>
                  <?php $button2 = get_sub_field('button_2'); if( $button2 ): ?>
                      <li><a href="<?php echo $button2['url']; ?>"><?php echo $button2['title']; ?></a></li>
                  <?php endif; ?>
                  <?php $button3 = get_sub_field('button_3'); if( $button3 ): ?>
                      <li><a href="<?php echo $button3['url']; ?>"><?php echo $button3['title']; ?></a></li>
                  <?php endif; ?>
                </ul>
              </div>
              <?php $post_object = get_sub_field('case'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
              <div class="card-content-case col-12 col-md-6">
                <?php echo get_the_post_thumbnail(); ?>
                  <h2><?php echo get_the_title(); ?></h2>
                  <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read Story</a>
              </div>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
          </div>
          <?php $count = get_row_index('cta_item'); ?>
          <?php endwhile; else: ?>
          <?php endif; ?>
      </div>
</section>









<script>
    jQuery(document).ready(function($) {
        var docWidth = 0;
        $('.card').click(function(event){
          var docWidth = $(document).width();
          console.log(docWidth);
          var cardOpen = $(this).next().hasClass('open');
          var highlight = $(this).hasClass('highlight');
          if($(this).hasClass('card-0')) {
            var cardNumber = 0
          }
          else if ($(this).hasClass('card-1')) {
            var cardNumber = 1
          }
          else if ($(this).hasClass('card-2')) {
            var cardNumber = 2
          }
          if(highlight == false){
            $(this).addClass('highlight');
            $('.card').not(this).removeClass('highlight');}
          else {
            $(this).removeClass('highlight');
          }
          if(docWidth < 768){
            $('.card-content').hide();
            if(cardOpen == true) {
              $(this).next().hide().removeClass('open');
            }
            else {
              $(this).next().slideToggle('slow').addClass('open');
            }
          }
          else {
            if(cardNumber == 0) {
              $('.card-content-1, .card-content-2').hide();
              $('.card-content-0').slideToggle('slow');
            }
            if(cardNumber == 1) {
              $('.card-content-0, .card-content-2').hide();
              $('.card-content-1').slideToggle('slow');
            }
            if(cardNumber == 2) {
              $('.card-content-0, .card-content-1').hide();
              $('.card-content-2').slideToggle('slow');
            }
            console.log(cardNumber);
          }
        });
    });
</script>

<!--
<?php $count = 0; ?>
<?php $count = get_row_index('cta_repeater'); ?>
<?php $count = 0; ?>
<?php $count = get_row_index('cta_repeater'); ?>
card-content-<?php echo $count; ?>
card-<?php echo $count; ?>
-->
