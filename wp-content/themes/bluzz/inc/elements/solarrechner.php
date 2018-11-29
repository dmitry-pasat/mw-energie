<div class="row">
	<div class="large-12 columns">
		<div class="text-center">
			<h1><?php the_title(); ?></h1>
			<div class="line"></div>
		</div>
		<div class="h20"></div>
		<iframe src="https://rechner.eturnity.ch/mw_energie/" width="100%" height="700px" frameBorder="0"></iframe>
		<div class="h50"></div>

		<?php
			$i=''; if( have_rows('section') ): while ( have_rows('section') ) : $i++; the_row();
			if ($i==1) {
		?>
			<div class="medium-12 columns">
				<?php the_sub_field('content');?>
				<div class="h50"></div>
			</div>
		<?php } else { ?>
			<div class="medium-6 columns">
				<h2><?php the_sub_field('title');?></h2>
				<?php the_sub_field('content');?>
				<div class="h20"></div>
			</div>
		<?php } ?>
		<?php endwhile;	else : endif; ?>

	</div>
</div>