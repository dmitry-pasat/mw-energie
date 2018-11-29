<div class="row">
	<div class="medium-12 columns">

		<div class="text-center">
			<h1><?php the_title(); ?></h1>
			<div class="h50"></div>
		</div>

		<div class="row">
			<div class="medium-6 columns">
				<?php $image = get_field('first_section_image'); if(!empty($image)): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>
			<div class="medium-6 columns">
				<h5><?php the_field('first_section_title') ?></h5>
				<?php the_field('first_section_content') ?>
				<div class="h20"></div>
				<?php if( have_rows('table') ): while ( have_rows('table') ) : the_row(); ?>
					<div class="row">
						<div class="medium-10 small-12 medium-centered small-uncentered columns">
							<div class="medium-12 small-12 columns"><h3><?php the_sub_field('title'); ?></h3></div>
							<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
								<div class="small-8 columns"><?php the_sub_field('name'); ?></div>
								<div class="small-4 columns"><?php the_sub_field('value'); ?></div>
								<div class="clearfix"></div>
							<?php endwhile; else : endif; ?>
						</div>
					</div>
					<div class="h20"></div>
				<?php endwhile; else : endif; ?>
			</div>

			<div class="clearfix"></div>
			<div class="h50"></div>

			<div class="" data-equalizer >
				<div class="medium-6 columns">
					<div class="" data-equalizer-watch>
						<h3><?php the_field('second_section_title'); ?></h3>
						<div class="h20"></div>
						<?php the_field('second_section_content'); ?>
						<div class="h20"></div>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="216" title="Ambassador"]'); ?>
				</div>
				<div class="medium-6 columns">
					<div class="" data-equalizer-watch>
						<h3><?php the_field('third_section_title'); ?></h3>
						<div class="h20"></div>
						<?php the_field('third_section_content'); ?>
						<div class="h20"></div>
					</div>
					<?php $image = get_field('third_section_image'); if(!empty($image)): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="h50"></div>

			<div class="medium-12 columns">
				<h1><?php the_field('forth_section_title'); ?></h1>
 				<div class="h20"></div>
				<?php the_field('forth_section_content'); ?>
			</div>
			<div class="clearfix"></div>
			<div class="h50"></div>
		</div>
	</div>
</div>