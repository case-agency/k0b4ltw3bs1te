<footer>
	<div id="social-bar">
		<div class="wrapper">
			<div class="social-left">
				<h6>Sign up for email updates</h6>
				<form action="http://case-agency.createsend.com/t/t/s/itktki/" method="post">
				    <p>
				        <input id="fieldEmail" name="cm-itktki-itktki" type="email" value="Email address" required />
				    </p>
				    <p>
				        <button type="submit">Sign Up</button>
				    </p>
				</form>
			</div>
			<div class="social-right">
				<h6>Follow Kobalt</h6>
				<a target="_blank" class="facebook" href="http://www.facebook.com/kobaltmusic">Facebook</a>
				<a target="_blank" class="twitter" href="http://www.twitter.com/kobalt">Twitter</a>
				<a target="_blank" class="linkedin" href="https://www.linkedin.com/company/kobalt-music-group">LinkedIn</a>
				<a target="_blank" class="youtube" href="https://www.youtube.com/user/KobaltMusic">YouTube</a>
				<a target="_blank" class="instagram" href="http://instagram.com/kobaltmusic">Instagram</a>
				<a target="_blank" class="spotify" href="http://open.spotify.com/user/kobaltmusic">Spotify</a>
				<a target="_blank" class="pinterest" href="http://www.pinterest.com/kobaltmusic/">Pinterest</a>
				<a target="_blank" class="google" href="https://plus.google.com/115483625346229215739/posts">Google+</a>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<ul>
			<li><a class="menu-title" href="page-services.php">Services</a></li>
			<li><a href="page-services-music-publishing.php">Music Publishing</a></li>
			<li><a href="page-services-neighbouring-rights.php">Neighbouring Rights</a></li>
			<li><a href="page-services-label-services.php">Label Services</a></li>
		</ul>
		<ul>
			<li><a class="menu-title" href="page-roster-featured.php">Roster</a></li>
			<li><a href="page-roster-featured.php" onclick="rosterLinkHandler(this)">Featured</a></li>
			<li><a href="page-roster.php#!roster=all" onclick="rosterLinkHandler(this)">All</a></li>
		</ul>
		<ul>
			<li><a class="menu-title" href="page-about.php">About</a></li>
			<li><a href="page-about.php">About Kobalt</a></li>
			<li><a href="page-about-global-management.php">Global Management</a></li>
			<li><a href="page-about-board-of-directors.php">Board of Directors</a></li>
		</ul>
		<ul>
			<li><a class="menu-title" href="page-news.php">News</a></li>
			<li><a href="page-news-press-releases.php">Press Releases</a></li>
			<li><a href="page-news-key-releases.php">Key Releases</a></li>
			<li><a href="page-news-charts.php">Charts</a></li>
		</ul>
		<ul>
			<li><a class="menu-title" href="page-synch.php">Synch</a></li>
			<li><a href="page-licensing-requests.php">Licensing Requests</a></li>
		</ul>
		<ul>
			<li ><a class="menu-title" href="page-contact.php">Contact</a></li>
			<li><a href="page-contact.php">Contact Us</a></li>
			<li><a href="page-contact-submissions.php">Submissions</a></li>
			<li><a href="page-licensing-requests.php">Licensing Requests</a></li>
			<li><a href="page-youtube-licensing-faq.php">YouTube Licensing FAQ</a></li>
			<li><a href="page-contact-jobs.php">Jobs</a></li>
		</ul>
		<p id="copyright">&copy; Copyright 2014 Kobalt Music Group, Ltd.</p>
		<p id="tos"><a href="page-privacy.php">Privacy Policy</a> &#124; <a href="page-tos.php#cookie">Cookie Policy</a> &#124; <a href="page-tos.php">Terms of Service</a></p>
	</div>
</footer>

<?php include('includes/analyticstracking.php'); ?>

<script type="text/javascript">
$(document).ready (function(){
	$('input').each(function() {

	       var default_value = this.value;

	       $(this).focus(function(){
	               if(this.value == default_value) {
	                       this.value = '';
	               }
	               $(this).css('color', '#000');
	       });

	       $(this).blur(function(){
	               if(this.value == '') {
	               			$(this).css('color', '#c1c1c1');
	                    	this.value = default_value;
	               }
	       });

	});
});
</script>