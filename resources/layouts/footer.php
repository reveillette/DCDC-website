	<footer class="footer">
		<nav class="navbar">
	    	<div class="container">
			  	<div id="navbar-bottom">
			        <ul>
			            <li><a href="howto.php#page02">FAQ</a></li>
			            <li><a href="#terms" id="terms">Terms of Use</a></li>
			            <li><a href="#privacy" id="privacy">Privacy</a></li>
			            <li><a href="#contact" id="contact">Contact Us</a></li>
			        </ul>
				</div>
		</nav>
		<div class="mid-gray" id="credits">
			<div class="container">
				<a href="http://www.enterprisecommunity.com/"><img height="30px" src="public/img/enterprise-logo.png"></a>
				<p>&copy; <?php echo date("Y"); ?> Enterprise Community Partners.</p>
				<br/>

				<p>Community How-To Guides originally developed by the <a href="http://www.dcdc-udm.org/">Detroit Collaborative Design Center</a>, with generous support from the <a href="http://www.surdna.org">Surdna Foundation</a>.</p>
				<p>Site design and development by <a href="www.visualizingsystems.com">Andrea Hansen</a> and <a href="http://https//www.linkedin.com/in/patrickstowejones">Patrick Stowe Jones</a> with the Detroit Collaborative Design Center.</p>
			</div>  
		</div>  
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- jQuery UI  -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	<!-- Bootstrap js. Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Bootstrap select js -->
    <script src="resources/library/bootstrap-select.js"></script>
    <!-- SVG pan/zoom by Ariutta https://github.com/ariutta/svg-pan-zoom -->
    <script src="resources/library/svg-pan-zoom.js"></script>
    <!-- JQuery Hotkeys by John Resig, https://github.com/jeresig/jquery.hotkeys-->
    <script src="resources/library/jquery.hotkeys.js"></script>
    <!-- Bootstrap WYSIWIG by Mindmup, http://mindmup.github.io/bootstrap-wysiwyg/-->
    <script src="resources/library/bootstrap-wysiwyg.js"></script>

    <!-- Site scripts -->
    <script src="resources/functions.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	    e.src='//www.google-analytics.com/analytics.js';
	    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	    ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
</body>
</html>

<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
