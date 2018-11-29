<div class="blue">
	<section id="themen" class="boxcontent row text-center">
		<div class="h100"></div>
		<div class="large-12 columns">
			<h1>Themen</h1>
			<div class="line"></div>
			<?php the_field('content'); ?>
		</div>
		<div class="clearfix"></div>

		<div class="boxcontent">
			<?php if( have_rows('home_box') ): while ( have_rows('home_box') ) : the_row(); ?>
				<a class="medium-3 small-6 columns bulb white-color" href="<?php the_sub_field('link') ?>">
					<br>
					<div><?php the_sub_field('icon'); ?></div>
					<br>
					<h2><?php the_sub_field('box_title'); ?></h2>
				</a>
			<?php endwhile; else : endif; ?>
			<div class="clearfix"></div>
		</div>
	</section>
</div>