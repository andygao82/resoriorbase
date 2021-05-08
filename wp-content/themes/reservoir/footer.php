<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reservoir
 */

?>
	<div class="map">
		<div class="wrapper">
			<div class="map-wrapper">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12623.003086894827!2d145.0264576!3d-37.7255275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe131beddef826762!2sMarco%20Fine%20Foods%20%26%20Groceries!5e0!3m2!1sen!2sau!4v1617334648891!5m2!1sen!2sau" width="2500" height="680" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="map-infos">
				<div class="inner-wrapper">
					<div class="map-info">
						<h3>Reservoir Central</h3>
						<span>830 Plenty Road, Reservoir</span>
						<span>VIC 3037</span>
					</div>
					<div class="map-info">
						<h3>Opening Hours</h3>
						<span>Open daily from</span>
						<span>8:00AM - 6:00PM</span>
					</div>
					<div class="map-info">
						<h3>Parking</h3>
						<span>2 hours free with With 500 on-site</span>
						<span>& undercover parking, parking is easy</span>
					</div>
					<a href="javascript:;" class="button">CONTACT US</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="wrapper">
						<h2>CONTACT US</h2>
						<div class="inner-wrapper">
							<div class="contact-info">
								<h4>LEASING ENQUIRY</h4>
								<a href="mailto:info@fitzorys.com.au" class="contact-info-email">info@fitzorys.com.au</a>
								<a href="tel:+61417980824">M +61 417 980 824</a>
							</div>
							<div class="contact-form">
								<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]')?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="wrapper">
						<span>Copyright &copy; Reservoir Central. All Rights Reserved</span>
						<a id="dd" href="http://ddcreative.com.au/" target="_blank">Website by D&D Creative</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
