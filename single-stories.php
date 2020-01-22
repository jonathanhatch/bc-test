<?php get_header(); ?>
<div class="header-pattern"></div>
<header class="team back-gradient">
	<div class="container">
			<h1 class="white"><?php the_title(); ?></h1>
	</div>
</header>
<section class="success container">
	<div class="row">
		<main id="content" role="main" class="page-content col-12 col-lg-7">
				<nav class="breadcrumbs"><ul><li><a href="/stories/">Stories</a> <span>/</span></li><li><?php the_title(); ?></li></ul></nav>
				<?php $video = get_field('video_link');
					if( $video ){
						echo '<div class="embed-responsive embed-responsive-16by9">';
						the_field('video_link');
						echo '</div>';
					}
					else {
						$alttext = get_the_title();
						the_post_thumbnail('desktop-landscape', ['class' => 'story-photo', 'alt' => $alttext]);
					}
				?>
				<div class="orange-bar"></div>
				<h3 class="member-title"><?php the_field('member_title'); ?></h3>
				<p class="full-email"><a href="mailto:<?php the_field('member_email'); ?>"><?php the_field('member_email'); ?></a></p>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, nothing matched your query.' ); ?></p>
				<?php endif; ?>
				<div class="meet-team"><a href="/stories/">&larr; Back to All Stories</a></div>
	  </main>
		<aside role="complementary" class="page-sidebar col-12 col-lg-4 offset-lg-1">
			<?php get_template_part( 'spm-layouts/layout', 'sidebar' ); ?>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
