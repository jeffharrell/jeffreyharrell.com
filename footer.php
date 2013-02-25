<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 */
?>
	</div>
	<footer id="footer" role="contentinfo">
		Copyright &copy;
		<address class="vcard"><a class="fn url" href="http://www.jeffreyharrell.com/">Jeff Harrell</a></address>.
		All Rights Reserved.
	</footer>
</div>

<?php wp_footer(); ?>

<script>
	var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-2544686-2']);
		_gaq.push(['_setDomainName', 'www.jeffreyharrell.com']);
		_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = 'http://www.google-analytics.com/ga.js';

		document.getElementsByTagName('head')[0].appendChild(ga);
	})();
</script>
</body>
</html>