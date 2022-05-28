<?php /* Template name: Our Team */  ?>

<?php get_header(); ?>
<div class="body-area">
	<div class="mid">
		<div class="team">

			<?php $ourTeam = new WP_Query(['post_type' => 'teams']) ?>
			<?php while ($ourTeam->have_posts()) : $ourTeam->the_post() ?>
				<div class="team-member">
					<?php the_post_thumbnail() ?>
					<h2><?php the_title() ?></h2>
					<h3><?php echo get_post_meta(get_the_ID(), 'ds', true) ?></h3>
					<p><?php the_content() ?></p>
					<div class="social">
						<ul>
							<li><a href="<?php echo get_post_meta(get_the_ID(), 'fb', true) ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo get_post_meta(get_the_ID(), 'tw', true) ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo get_post_meta(get_the_ID(), 'lk', true) ?>"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			<?php endwhile ?>

		</div>
	</div>
</div>
<?php get_footer() ?>