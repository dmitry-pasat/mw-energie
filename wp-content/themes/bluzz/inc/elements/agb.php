<div class="row">
	<div class="large-12 columns">
		<div class="text-center">
			<h1><?php the_title(); ?></h1>
			<?php the_field('content'); ?>
			<br>
		</div>
		<ul class="accordion" data-accordion="agb-accordion" data-allow-all-closed="true" role="tablist">
			<?php if( have_rows('agb') ): $n=0; while ( have_rows('agb') ) : $n++; the_row(); ?>
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