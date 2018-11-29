<section id="uber_uns" class="boxcontent text-center blue">
	<div class="h50"></div>
	<div class="row">
		<div class="large-12 columns">
			<h1><?php the_field('despre_title') ?></h1>
			<div class="line"></div>
			<?php the_field('despre_content') ?>
			<br>
		</div>
		<div class="clearfix"></div>
		<div class="h20"></div>
		<div class="offers text-center">
			<div class="large-6 large-centered columns">
				<div class="row">
					<?php $i=0; if( have_rows('offer') ): while ( have_rows('offer') ) : $i++; the_row(); ?>
						<div class="medium-4 <?php if ($i==3) { echo "small-12"; } else { echo "small-6"; } ?> columns bulb white-color">
							<?php the_sub_field('icon'); ?>
							<div class="h20"></div>
							<h3><?php the_sub_field('text'); ?></h3>
							<div class="h20"></div>
						</div>				
					<?php endwhile; else : endif; ?>
				</div>
			</div>
		</div>
		<div class="h50"></div>
		<?php $image = get_field('despre_image'); if( !empty($image) ): ?>
			<img class="large-12 columns" src="<?php echo $image['url']; ?>" alt="">
		<?php endif; ?>
		<div class="clearfix"></div>
	</div>
	<div class="h50"></div>
</section>