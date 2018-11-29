<div class="bleu">
	<div class="h50"></div>
	<div class="row text-center">
		<div class="large-12 columns">
			<div class="h50"></div>
			<h1>Partner</h1>
			<div class="line"></div>
			<div class="h20"></div>
			<p>Wir sind Miglied von</p>
			<div class="h50"></div>
		</div>
	</div>
	<div id="partners1" class="owl-carousel">
		<?php if( have_rows('partners') ): while ( have_rows('partners') ) : the_row(); ?>
			<?php $image = get_sub_field('logo'); if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		<?php endwhile; else : endif; ?>
	</div>

	<div class="h50"></div>
	<div class="row text-center">
		<div class="large-12 columns">
			<div class="h50"></div>
			<p>Wir arbeiten gerne mit unseren Partnern</p>
			<div class="h50"></div>
		</div>
	</div>
	<div id="partners2" class="owl-carousel">
		<?php if( have_rows('partners_two') ): while ( have_rows('partners_two') ) : the_row(); ?>
			<?php $image = get_sub_field('logo'); if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		<?php endwhile; else : endif; ?>
	</div>

	<div class="h50"></div>
</div>