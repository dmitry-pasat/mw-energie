<div id="team"></div>
<section class="boxcontent text-center gray">
	<div class="h100"></div>
	<div class="row">
		<div class="large-12 columns">
			<h1><?php the_field('team_title'); ?></h1>
			<div class="line"></div>
			<?php the_field('team_content'); ?>
		</div>
		<div class="clearfix"></div>
		<br><br>
		<div class="team" data-equalizer>
		<?php if( have_rows('person') ): while ( have_rows('person') ) : the_row(); ?>
			<div class="large-4 small-6 columns end" data-equalizer-watch>
				<?php $image = get_sub_field('image'); if( !empty($image) ): ?>
				<div class="home-box" style="background-image: url(<?php echo $image['url']; ?>);">
				<?php endif; ?>
					<span class="over mobilenone">
						<h3><?php the_sub_field('name'); ?></h3>
						<p>- <?php the_sub_field('position'); ?> -<br><?php the_sub_field('phone'); ?></p>
						<?php if( get_sub_field('email') ): ?>
							<a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
						<?php endif; ?>
					</span>
				</div>
				<br>
				<span class="none">
					<h3><?php the_sub_field('name'); ?></h3>
					<p>- <?php the_sub_field('position'); ?> -<br><?php the_sub_field('phone'); ?></p>
					<?php if( get_sub_field('email') ): ?>
						<a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
					<?php endif; ?>
				</span>
			</div>

		<?php endwhile; else : endif; ?>

		</div>
		<div class="clearfix"></div>
	</div>
</section>