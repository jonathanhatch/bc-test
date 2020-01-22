<?php if ( $query->have_posts() ) { ?>

	<?php while ($query->have_posts()) { $query->the_post(); ?>
		<div class="team-member col-12 col-sm-6 col-md-4 col-lg-3">
			<div class="team-member-content">
				<a href="<?php the_permalink(); ?>"><?php $alttext = get_the_title(); the_post_thumbnail('team-member', ['class' => 'card-img-top', 'alt' => $alttext]); ?></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<ul>
							<li class="position"><?php the_field('member_position'); ?></li>
							<li class="phone"><?php the_field('member_phone'); ?></li>
							<li class="email"><a href="mailto:<?php the_field('member_email'); ?>">Email <?php the_field('first_name'); ?></a></li>
						</ul>
			</div>
		</div><!-- .card -->
		<?php } ?>

	<?php } else { echo "No Results Found"; } ?>
