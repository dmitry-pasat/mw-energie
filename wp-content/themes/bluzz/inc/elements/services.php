<section id="services_angebote" class="">
	<div class="medium-uncollapse large-collapse">
		<div class="large-6 columns">
			<?php $image = get_field('servicii_image'); if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
		<div class="large-6 columns">
			<div class="large-12 columns">
				<div class="text-center">
					<div class="h100"></div>
					<h1><?php the_field('servicii_title'); ?></h1>
					<div class="line"></div>
					<br>
				</div>
				<ul class="accordion" data-accordion="28ciys-accordion" data-allow-all-closed="true" role="tablist">
					<?php if( have_rows('acordeon') ): $n=0; while ( have_rows('acordeon') ) : $n++; the_row(); ?>
						<li class="accordion-item <?php if ($n==1) { echo "is-active";} ?> " data-accordion-item="">
							<a href="#" class="accordion-title" aria-controls="<?php if ($n==1) { echo "first";} elseif ($n==2) { echo "second";} elseif ($n==3) { echo "third";} elseif ($n==4) { echo "fourth";} ?>-accordion" role="tab" id="<?php if ($n==1) { echo "first";} elseif ($n==2) { echo "second";} elseif ($n==3) { echo "third";} elseif ($n==4) { echo "fourth";} ?>-accordion-label" aria-expanded="false" aria-selected="false">
								<h3><?php the_sub_field('title'); ?></h3>
							</a>
							<div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="<?php if ($n==1) { echo "first";} elseif ($n==2) { echo "second";} elseif ($n==3) { echo "third";} elseif ($n==4) { echo "fourth";} ?>-accordion-label" aria-hidden="true" id="<?php if ($n==1) { echo "first";} elseif ($n==2) { echo "second";} elseif ($n==3) { echo "third";} elseif ($n==4) { echo "fourth";} ?>-accordion" style="display: none;">
								<?php the_sub_field('content'); ?>
							</div>
						</li>
					<?php endwhile; else : endif; ?>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>