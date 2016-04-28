<?php
/**
	The template for displaying the FOOTER after the close of <div id="page-wrapper">
*/
?>

		<div class="clearfix"></div>
		
		<?php // header.php: <div id="page-wrapper"> ?>

	</div>
	
	<footer id="footer" class="">

		<div class="container">
		
			<div class="row">

				<div class="col-xxs-12 col-xs-8 col-sm-8 col-md-9 col-lg-9 footer__copyright">
					&copy; <?php echo date('Y') ?> Lonsdale Capital Partners, Lonsdale Capital Partners LLP, Authorised and Regulated by the Financial Conduct Authority
				</div>

				<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-3 col-lg-3 footer__credit">
					<a href="http://www.imarkcreative.com/" title="Site by iMark" target="_blank">Site by iMark</a>
				</div>
			
			</div>
		
		</div>

	</footer>


	<!-- Set templateURL var for use in JS -->
	<script type="text/javascript">
		var templateUrl = '<?php echo get_bloginfo("template_url"); ?>';
	</script>


	<!-- JS Files -->
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

	<!-- Google Analytics
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-43339734-2');ga('send','pageview');
	</script>
	-->


	<?php wp_footer(); ?>
	
</body>
</html>