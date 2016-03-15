<?php
/**
 * The template for displaying the footer: displays the closing of the <div id="footer-wrapper"> and all content after.
 */
?>		
		<div class="clearfix"></div>
        </div>

		<div id="footer-wrapper">
        <footer>
        
        	<div class="footer-left">
            	&copy; <?php echo date('Y'); ?> Lonsdale Capital Partners, Lonsdale Capital Partners LLP, Authorised and Regulated by the Financial Conduct Authority.
            </div>
            
        	<div class="footer-right">
            	<?php // Site by <a href="http://www.wearetourist.com/" title="Site by Tourist" target="_blank">Tourist</a> ?>
            	Site by <a href="http://www.imarkcreative.com/" title="Site by iMark" target="_blank">iMark</a>
            </div>
        
        </footer>
        </div>
            
    </div><!-- #main-wrapper -->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    
    <!-- Scripts -->
    <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

    <!-- Google Analytics  -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-43339734-4');ga('send','pageview');
    </script>
    
    <!-- /** From GA
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-43339734-4', 'lonsdalepartners.com');
		ga('send', 'pageview');
    </script>
    -->
    
    </body>
</html>