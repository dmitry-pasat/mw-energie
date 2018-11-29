<div class="row">
	<div class="large-12 columns">
		<div class="h50"></div>
		<h1><?php the_title(); ?></h1>
		<?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>
			<div class="h50"></div>
			<h2><?php the_sub_field('title');?></h2>
			<div class="h20"></div>
			<?php the_sub_field('content');?>
		<?php endwhile;	else : endif; ?>
		<div class="h50"></div>
	</div>
</div>