<div id="footer" class="container_12">
	<div class="footerContent"><?=latticeview::factory('footer')->view();?></div>
</div>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ?
"https://analytics.occupy.net/" : "http://analytics.occupy.net/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 26);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script>
<noscript><p><img src="http://analytics.occupy.net/piwik.php?idsite=26" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

