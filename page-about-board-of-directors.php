<?php
include("includes/data.php");
function getYearsExperienceSince($year) {
	$thisYear = date("Y");
	$yearElapsed = $thisYear - $year;

	if($yearElapsed == 1) {
		return "1 Year";
	} else if ($yearElapsed < 20) {
		return "$yearElapsed Years";
	} else {
		$yearElapsed = round($yearElapsed / 5, 0)*5;
		return "Over $yearElapsed Years";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo formatPageTitle('About') ?></title>
  <?php include('includes/css.php'); ?>
  <link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css" />
  <?php include('includes/js.php'); ?>

</head>
<body>
<?php
include('includes/header.php'); ?>

<!-- start main -->
<section class="main" id="global-management">

  <div class="wrapper">

    <h1>ABOUT<br /><span>BOARD OF DIRECTORS</span></h1>

    <div id="global-management-wrapper">
        <div class="gm-bio">
          <img src="img/phase2/ahdritz.jpg" alt="Willard Ahdritz" />
          <p><span>Willard Ahdritz</span><br />Founder &amp; CEO</p>
          <a class="bio-link" href="#bio-willard-ahdritz">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/board-ekelund.jpg" alt="Johan Ekelund" />
          <p><span>Johan Ekelund</span><br />Co-Founder, Diesel Music &amp; Kobalt Music Group</p>
          <a class="bio-link" href="#bio-johan-ekelund">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/brockholes.jpg" alt="James Fitzherbert-Brockholes" />
          <p><span>James Fitzherbert-Brockholes</span><br />Chief Financial Officer</p>
          <a class="bio-link" href="#bio-james-fitzherbert-brockholes">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/sanders.jpg" alt="Richard Sanders" />
          <p><span>Richard Sanders</span><br />President</p>
          <a class="bio-link" href="#bio-richard-sanders">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/thompson.jpg" alt="Richard Thompson" />
          <p><span>Richard Thompson</span><br />Chief Technical Officer</p>
          <a class="bio-link" href="#bio-richard-thompson">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/board-bunting.jpg" alt="Tim Bunting" />
          <p><span>Tim Bunting</span><br />Non-Executive Chairman, Kobalt Music Group<br />General Partner, Balterton Capital (UK) LLP</p>
          <a class="bio-link" href="#bio-tim-bunting">Read bio</a>
        </div>
        <div class="gm-bio">
            <img src="img/phase2/board-caro.jpg" alt="David Caro" />
            <p><span>David Caro</span><br />MSD Capital, L.P</p>
            <a class="bio-link" href="#bio-david-caro">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/board-anders.jpg" alt="Anders Palm" />
          <p><span>Anders Palm</span><br />Media and Real Estate Investor</p>
          <a class="bio-link" href="#bio-anders-palm">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/board-tandberg.jpg" alt="Jacob Tandberg" />
          <p><span>Jacob Tandberg</span><br />CEO, Massellaz SA</p>
          <a class="bio-link" href="#bio-jacob-tandberg">Read bio</a>
        </div>
    </div>
</section>

<div class="bio-box" id="bio-willard-ahdritz" style="display:none;">
  <h3><span>Willard Ahdritz</span><br />Founder &amp; CEO</h3>
  <p>Founded Kobalt in 2000.
  <br /><?= getYearsExperienceSince(1994)?> of global publishing experience, 8 years' experience in Corporate Strategy at L.E.K Consulting.
  <br />Co-founded Telegram Records &amp; Publishing.
  <br />Bachelor of Electrical Engineering, Rudbecksskolan, &Ouml;rebro.
  <br />Second-lieutenant, Swedish Army, Communication, Research &amp; Development, S1 Enk&ouml;ping.
  <br />Master of Science, Finance, Stockholm School of Economics, NYU Stern Graduate Division, New York. NMPA Board Member. RSA Fellow.
  <br />Lives in New York.
  <br />Plays saxophone.</p>
</div>
<div class="bio-box" id="bio-richard-sanders" style="display:none;">
  <h3><span>Richard Sanders</span><br />President</h3>
  <p>Joined Kobalt in 2012.
  <br /><?= getYearsExperienceSince(1982)?> of experience in worldwide media, entertainment and digital services.
  <br />Most recently Chairman, International &amp; President, Global Marketing at Sony Music Entertainment.
  <br />Held key positions at Sony BMG, RCA, V2, Arista.</p>
</div>
<div class="bio-box" id="bio-james-fitzherbert-brockholes" style="display:none;">
  <h3><span>James Fitzherbert-Brockholes</span><br />Chief Financial Officer</h3>
  <p>Joined Kobalt in 2001.
  <br /><?= getYearsExperienceSince(2000)?> of music publishing experience.
  <br />Formerly Consultant with L.E.K Consulting, focusing on M&amp;A strategy and corporate strategy. MA from Cambridge University.</p>
</div>
<div class="bio-box" id="bio-richard-thompson" style="display:none;">
  <h3><span>Richard Thompson</span><br />Chief Technical Officer</h3>
  <p>Joined Kobalt in 2001.
  <br />Formerly Consultant with Oracle.
  <br />Previous roles include developing major media rights platforms for Sky Digital, projects at Nat West and at the UK Ministry of Defense.</p>
</div>
<div class="bio-box" id="bio-johan-ekelund" style="display:none;">
  <h3><span>Johan Ekelund</span><br />Co-Founder, Diesel Music &amp; Kobalt Music Group</h3>
  <p>Bio coming soon.</p>
</div>
<div class="bio-box" id="bio-tim-bunting" style="display:none;">
  <h3><span>Tim Bunting</span><br />Non-Executive Chairman, Kobalt Music Group<br />General Partner, Balterton Capital (UK) LLP</h3>
  <p>Tim joined Balderton as a General Partner in 2007. He was previously a partner of Goldman Sachs where he spent 18 years. At Goldman, Tim held various roles including Global Head of Equity Capital Markets (2002 to 2005) and Vice-Chairman of Goldman Sachs International (2005 to 2006).
Tim started to work with Balderton and its portfolio of companies in 2005 when he became a non-executive director of Alphyra. In 2006 Tim spent a period as non-executive chairman of Betfair. Since joining Balderton Tim has joined the boards of other portfolio companies.
Outside of Balderton, Tim is a non-executive director of Yell Group plc and Sepura plc. Tim is also a Governor of Wellington College and a Trustee of the Rainbow Trust Children's Charity.
<br />Education: Tim is a graduate of the University of Cambridge.</p>
</div>
<div class="bio-box" id="bio-david-caro" style="display:none;">
    <h3><span>David Caro</span><br />MSD Capital, L.P</h3>
    <p>Bio coming soon.</p>
</div>
<div class="bio-box" id="bio-anders-palm" style="display:none;">
  <h3><span>Anders Palm</span><br />Media and Real Estate Investor<br />Board Member, STIM</h3>
  <p>Bio coming soon.</p>
</div>
<div class="bio-box" id="bio-jacob-tandberg" style="display:none;">
  <h3><span>Jacob Tandberg</span><br />CEO, Massellaz SA</h3>
  <p>Bio coming soon.</p>
</div>


<?php include("includes/footer.php"); ?>
<script type="text/javascript">
  $(document).ready( function(){

    $('.bio-link').fancybox({
      autoCenter: true,
      width: 500,
      autoHeight: true
    });

  });
</script>
</body>
</html>
