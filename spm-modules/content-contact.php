<div class="container">
  <div class="row">
    <section class="contact col-12 col-lg-8">
        <h3 class="sidebar"><?php the_field('conversation_text', 'option'); ?></h3>
        <p class="sidebar-conversation-phone"><?php the_field('global_phone_number', 'option'); ?></p>
        <?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
    </section>
    <section class="contact-team col-12 col-lg-4">
      <?php echo wp_get_attachment_image(get_field('team_photo'), 'landscape-tablet', 0, array('class' => 'sidebar-image')); ?>
      <div class="pattern"></div>
      <h3 class="sidebar">Experience matters.</h3>
      <a class="button hero-button" href="/your-team/">Meet Our Team</a>
    </section>
  </div>
</div>
