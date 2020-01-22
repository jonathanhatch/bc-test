<?php get_header(); ?>
<div class="header-pattern"></div>
<header class="team back-gradient">
	<div class="container">
			<h1 class="white"><?php the_title(); ?></h1>
	</div>
</header>
<section class="team-member container">
	<div class="row">
		<main id="content" role="main" class="page-content col-12 col-md-7">
				<div class="row">
					<div class="col-12 col-lg-8">
						<?php $alttext = get_the_title(); the_post_thumbnail('team-member', ['class' => 'member-photo', 'alt' => $alttext]); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h3 class="member-title"><?php the_field('member_title'); ?></h3>
						<p class="full-email"><a href="mailto:<?php the_field('member_email'); ?>"><?php the_field('member_email'); ?></a></p>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; else : ?>
							<p><?php _e( 'Sorry, nothing matched your query.' ); ?></p>
						<?php endif; ?>
						<div class="meet-team"><a href="/your-team/">&larr; Meet the Rest of the Team</a></div>
					</div>
				</div>
	  </main>
		<aside role="complementary" class="page-sidebar col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-4">
			<?php get_template_part( 'spm-layouts/layout', 'sidebar' ); ?>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
