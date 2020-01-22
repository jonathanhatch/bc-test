<?php /* Template Name: Sidebar */ get_header(); ?>
<div class="header-pattern"></div>
<header class="team back-gradient">
	<div class="container">
		<div class="col-12">
			<h1 class="white"><?php the_title(); ?></h1>
		</div>
	</div>
</header>
<section class="lending container">
	<div class="row">
		<main id="content" role="main" class="page-content col-12 col-md-7">
				<?php get_template_part( 'spm-layouts/layout', 'primary' ); ?>
	  </main>
		<aside role="complementary" class="page-sidebar col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-4">
			<?php get_template_part( 'spm-layouts/layout', 'sidebar' ); ?>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
