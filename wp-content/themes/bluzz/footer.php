<?php if (!is_page(221) && !is_page(154)) { ?>

<?php } if (!is_page(154)) { ?>
	<section class="blue boxcontent text-center">
		<div class="h100"></div>
		<div class="row">
			<div class="large-12 columns">
				<h1>Weiterempfehlen</h1>
				<div class="line"></div>
				<p>Möchten Sie zur Energiewende beitragen? <br>Empfehlen Sie uns jetzt weiter</p>
				<br>
				<div class="h50"></div>
				<a href="<?php the_permalink(154); ?>" class="button">Weiterempfehlen</a>
			</div>
			<div class="clearfix"></div>
			<div class="h50"></div>
		</div>
	</section>
<?php } ?>


<div id="footer" class="text-center">
	<div class="h50"></div>
	<div class="row">
		<img class="large-4 large-centered columns" src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="<?php bloginfo('name'); ?>">
		<div class="clearfix"></div>
		<a href="https://www.facebook.com/MWEnergieAG/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="https://twitter.com/mwenergie" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<div class="h20"></div>
		<div class="large-3 large-centered columns">
			<a class="<?php if (is_page(2)) echo 'active'; ?> large-4 columns" href="<?php echo get_page_link(2); ?>"><?php echo get_the_title(2); ?></a>
			<a class="<?php if (is_page(112)) echo 'active'; ?> large-4 columns" href="<?php echo get_page_link(112); ?>"><?php echo get_the_title(112); ?></a>
			<a class="<?php if (is_page(74)) echo 'active'; ?> large-4 columns" href="<?php echo get_page_link(74); ?>"><?php echo get_the_title(74); ?></a>
			<div class="clearfix"></div>
		</div>
		<div class="large-4 large-centered columns">
			<div class="h20"></div>
			<a class="<?php if (is_page(542)) echo 'active'; ?> large-6 columns" href="<?php echo get_page_link(542); ?>"><?php echo get_the_title(542); ?></a>
			<a class="<?php if (is_page(544)) echo 'active'; ?> large-6 columns" href="<?php echo get_page_link(544); ?>"><?php echo get_the_title(544); ?></a>
		</div>
		<div class="clearfix"></div>
	</div>
	<br>
	&copy; <?php echo date('Y') ?> MW Energie AG. All rights reserved.
	<div class="h50"></div>
</div>

<?php wp_footer(); ?>


<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>

<!-- map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPcwXrhqH6HJ6alXZXaCLbUdEiXM8JxSQ"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>

<script>$(document).foundation();</script>


<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
	$(document).ready(function () {
		$('#partners1').owlCarousel({
		    loop: true,
			margin: 100,
			callbacks: true,
			URLhashListener: true,
			loop:true,
			autoplay:true,
			autoHeight: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 6
				}
			}
		});
		$('#partners2').owlCarousel({
		    loop: true,
			margin: 100,
			callbacks: true,
			URLhashListener: true,
			loop:true,
			autoplay:true,
			autoHeight: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 6
				}
			}
		});
		owl = $('.owl-carousel').owlCarousel();
		$(".next").click(function () {
			owl.trigger('next.owl.carousel');
		});
	});
</script>



<!-- parallax header -->
<script>
	(() => {
	$(document).ready(() => {
		var parallax = $('.parallax');
		var header = $('header');
		$(window).scroll(function(e) {
			let value = $(e.target).scrollTop();
			parallax.css({transform: `translate3d(0,${value / 3}px,0)`});
			
			if (value <= 0) {
				header.removeClass('header-full');
			} else {
				if (!header.hasClass('header-full')) header.addClass('header-full');
			}
		});
	});
})();
</script>



<!-- portfolio filter -->
<script>
	$(function() {
		var selectedClass = "";
		$(".fil-cat").click(function(){ 
		selectedClass = $(this).attr("data-rel"); 
		 $("#portfolio").fadeTo(100, 0.1);
		$("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
		setTimeout(function() {
			$("."+selectedClass).fadeIn().addClass('scale-anm');
			$("#portfolio").fadeTo(300, 1);
		}, 300); 
		
	});
});
</script>


<!-- load more -->
<script>
	$(function () {
		$(".more").slice(0, 8).show();
		var status = "less";
		<?php if( have_rows('portofoliu') ): ?>
		var totalEntries = <?php echo count( get_field('portofoliu')); ?>;
		<?php  endif; ?>
		$("#loadMore").on('click', function (e) {
			e.preventDefault();
			$(".more:hidden").slice(0, 4).slideDown();
			
			if (status == "less") {
				if ($(".more:hidden").length == 0) {
					$("#load").fadeOut('slow');
					var element = document.getElementById("loadMore");
					element.innerHTML = "Show less";
					status = "more";
				}
			} else if (status == "more") {
				document.getElementById("loadMore").innerHTML = "See More";
				$(".more").slice(8, totalEntries).slideUp();
				status = "less";
			}
		});
	});
</script>


<!-- modal popup -->
<script>
	$(document).ready(function () {
		$("#bkgOverlay").delay(4800).fadeIn(400);
  		$("#delayedPopup").delay(5000).fadeIn(400);	
		$(".backgroundOverlay").click(function (e) {
			HideDialog();
			e.preventDefault();
		});
	});
	function HideDialog() {
		$("#bkgOverlay").fadeOut(400);
		$("#delayedPopup").fadeOut(300);
	}
</script>
<!-- end modal popup -->



</body>
</html>