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
  <title><?php echo formatPageTitle('About') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

    <h1>ABOUT<br /><span>GLOBAL MANAGEMENT</span></h1>

    <div id="global-management-wrapper">
        <div class="gm-bio">
          <img src="img/phase2/ahdritz.jpg" alt="Willard Ahdritz" />
          <p><span>Willard Ahdritz</span><br />Founder &amp; CEO</p>
          <a class="bio-link" href="#bio-willard-ahdritz">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/sanders.jpg" alt="Richard Sanders" />
          <p><span>Richard Sanders</span><br />President</p>
          <a class="bio-link" href="#bio-richard-sanders">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/brockholes.jpg" alt="James Fitzherbert-Brockholes" />
          <p><span>James Fitzherbert-Brockholes</span><br />Chief Financial Officer</p>
          <a class="bio-link" href="#bio-james-fitzherbert-brockholes">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/thompson.jpg" alt="Richard Thompson" />
          <p><span>Richard Thompson</span><br />Chief Technical Officer</p>
          <a class="bio-link" href="#bio-richard-thompson">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/metcalfe.jpg" alt="Sas Metcalfe" />
          <p><span>Sas Metcalfe</span><br />President, Global Creative</p>
          <a class="bio-link" href="#bio-sas-metcalfe">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/winchester.jpg" alt="Christiaan Winchester" />
          <p><span>Christiaan Winchester</span><br />General Counsel</p>
          <a class="bio-link" href="#bio-christiaan-winchester">Read bio</a>
        </div>
<?
/*
?>
        <div class="gm-bio">
          <img src="img/phase2/ericsson.jpg" alt="Tomas Ericsson" />
          <p><span>Tomas Ericsson</span><br />President, Society Relations</p>
          <a class="bio-link" href="#bio-tomas-ericsson">Read bio</a>
        </div>
<?
*/
?>

        <div class="gm-bio">
          <img src="img/phase2/hitchman.jpg" alt="Paul Hitchman" />
          <p><span>Paul Hitchman</span><br />Managing Director, KLS</p>
          <a class="bio-link" href="#bio-paul-hitchman">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/dodge.jpg" alt="Pete Dodge" />
          <p><span>Pete Dodge</span><br />General Manager, KLS</p>
          <a class="bio-link"href="#bio-pete-dodge">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/quinn.jpg" alt="Diarmand Quinn" />
          <p><span>Diarmuid Quinn</span><br />President North America, KLS</p>
          <a class="bio-link" href="#bio-diarmand-quinn">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/berkel.jpg" alt="Hans Van Berkel" />
          <p><span>Hans Van Berkel</span><br />Executive Chairman, KNR</p>
          <a class="bio-link" href="#bio-hans-van-berkel">Read bio</a>
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
<div class="bio-box" id="bio-sas-metcalfe" style="display:none;">
  <h3><span>Sas Metcalfe</span><br />President, Global Creative</h3>
  <p>Joined Kobalt in 2001.
  <br /><?= getYearsExperienceSince(1982)?> of music industry experience.
  <br />Formerly Head of A&amp;R at EMI Chrysalis and at Warner Chappell. A&amp;R Manager at Arista Records.</p>
</div>
<div class="bio-box" id="bio-christiaan-winchester" style="display:none;">
  <h3><span>Christiaan Winchester</span><br />General Counsel</h3>
  <p>Joined Kobalt in 2005.
  <br />Previously with the Music Group at Harbottle &amp; Lewis, specialising in music industry clients.
  <br />Trained at Clifford Chance. Qualified UK Solicitor in 1999. LLB Durham University, LLM Kings College London.</p>
</div>
<?
/*
?>
<div class="bio-box" id="bio-tomas-ericsson" style="display:none;">
  <h3><span>Tomas Ericsson</span><br />President, Society Relations</h3>
  <p>Bio coming soon.</p>
</div>
<?
*/
?>
<div class="bio-box" id="bio-paul-hitchman" style="display:none;">
  <h3><span>Paul Hitchman</span><br />Managing Director, KLS</h3>
  <p>Joined Kobalt in 2011.
  <br /><?= getYearsExperienceSince(1992)?> of music industry experience.
  <br />Co-founder of digital music companies Playlouder, CI and MSP.
  <br />Previously at BMG Music and Warner Music. Cambridge Economics graduate, RSA Fellow.</p>
</div>
<div class="bio-box" id="bio-pete-dodge" style="display:none;">
  <h3><span>Pete Dodge</span><br />General Manager, KLS</h3>
  <p>Joined Kobalt in 2012 at the founding of KLS.
  <br /><?= getYearsExperienceSince(1987)?> of music and digital industry experience.
  <br />Formerly European Managing Director at IODA. Held key positions at Rough Trade Distribution, RTM Sales and Marketing and Play It Again Sam (PIAS) Recordings.</p>
</div>
<div class="bio-box" id="bio-diarmand-quinn" style="display:none;">
  <h3><span>Diarmuid Quinn</span><br />President North America, KLS</h3>
  <p>Bio coming soon.</p>
</div>
<div class="bio-box" id="bio-hans-van-berkel" style="display:none;">
  <h3><span>Hans Van Berkel</span><br />Executive Chairman, KNR</h3>
  <p>Joined Kobalt in 2011 at the founding of KNR.
  <br /><?= getYearsExperienceSince(1992)?> of experience as CFO at Polygram Group and 18 years as Managing Director of Dutch Neighbouring Rights Society SENA.</p>
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
