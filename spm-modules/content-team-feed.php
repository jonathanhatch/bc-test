<section class="team-feed back-gradient" aria-label="Team Member Feed">
    <div class="container">
      <div class="filter col-12">
        <h1 class="white"><?php the_sub_field('heading'); ?></h1>
        <div class="d-none d-md-block"><?php echo do_shortcode('[searchandfilter id="314"]'); ?></div>
      </div>
      <div class="clearfix"></div>
        <div class="team-feed-container container">
          <div class="row">
            <div class="team-feed-select col-12 d-md-none"><?php echo do_shortcode('[searchandfilter id="314"]'); ?></div>
            <?php echo do_shortcode('[searchandfilter id="314" show="results"]'); ?>
          </div><!-- .card-deck -->
      </div><!-- .container -->

    </div><!-- .container -->
</section>
