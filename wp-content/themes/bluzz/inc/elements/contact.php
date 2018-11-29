<section id="contact" class="boxcontent">
	<div class="row">
		<div class="large-12 columns text-center">
			<h1><?php the_title(); ?></h1>
			<div class="line"></div>
			<?php the_field('content'); ?>
		</div>
		<div class="clearfix"></div>
		<br><br>
		<div class="contact">
			<div class="large-4 columns">
				<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field('address'); ?></p>
				<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></p>
				<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></p>
				<br>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]'); ?>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<?php $location = get_field('map'); if( !empty($location) ): ?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
<?php endif; ?>