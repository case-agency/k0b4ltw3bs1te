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
          <p><span>James Fitzherbert-Brockholes</span><br />CFO</p>
          <a class="bio-link" href="#bio-james-fitzherbert-brockholes">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/thompson.jpg" alt="Richard Thompson" />
          <p><span>Richard Thompson</span><br />CTO</p>
          <a class="bio-link" href="#bio-richard-thompson">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/metcalfe.jpg" alt="Sas Metcalfe" />
          <p><span>Sas Metcalfe</span><br />President, Global Creative</p>
          <a class="bio-link" href="#bio-sas-metcalfe">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/winchester.jpg" alt="Christiaan Winchester" />
          <p><span>Christiaan Winchester</span><br />Group General Counsel</p>
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
          <img src="img/phase2/paul-hitchman.jpeg" alt="Paul Hitchman" />
          <p><span>Paul Hitchman</span><br />President, Kobalt Label Services International</p>
          <a class="bio-link" href="#bio-paul-hitchman">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/quinn.jpg" alt="Diarmuid Quinn" />
          <p><span>Diarmuid Quinn</span><br />President North America, KLS</p>
          <a class="bio-link" href="#bio-diarmuid-quinn">Read bio</a>
        </div>
        <div class="gm-bio">
          <img src="img/phase2/berkel.jpg" alt="Hans Van Berkel" />
          <p><span>Hans Van Berkel</span><br />Executive Chairman, KNR</p>
          <a class="bio-link" href="#bio-hans-van-berkel">Read bio</a>
        </div>
        <div class="gm-bio">
            <img src="img/phase2/ryan-wright.jpg" alt="Ryan Wright" />
            <p><span>Ryan Wright</span><br />SVP, Marketing</p>
            <a class="bio-link" href="#bio-ryan-wright">Read bio</a>
        </div>
        <div class="gm-bio">
            <img src="img/phase2/marissa-mencher.jpg" alt="Marissa Mencher" />
            <p><span>Marissa Mencher</span><br />Head Of Human Resources</p>
            <a class="bio-link" href="#bio-marissa-mencher">Read bio</a>
        </div>
        <div class="gm-bio">
            <img src="img/phase2/ann-tausis.jpg" alt="Ann Tausis" />
            <p><span>Ann Tausis</span><br />Managing Director, KNRL</p>
            <a class="bio-link" href="#bio-ann-tausis">Read bio</a>
        </div>
        <div class="gm-bio">
            <img src="img/phase2/jeannette-perez.jpg" alt="Jeannette Perez" />
            <p><span>Jeannette Perez</span><br />SVP, Synch &amp; Brand Partnerships, North America</p>
            <a class="bio-link" href="#bio-jeannette-perez">Read bio</a>
        </div>
        <div class="gm-bio">
            <img src="img/phase2/michelle-stoddart.jpg" alt="Michelle Stoddart" />
            <p><span>Michelle Stoddart</span><br />SVP, Global Creative Synchronisation  </p>
            <a class="bio-link" href="#bio-michelle-stoddart">Read bio</a>
        </div>
        <div class="gm-bio">
            <img src="img/phase2/simon-dennett.jpg" alt="Simon Dennett" />
            <p><span>Simon Dennett</span><br />Executive Vice President</p>
            <a class="bio-link" href="#bio-simon-dennett">Read bio</a>
        </div>
    </div>
</section>

<div class="bio-box" id="bio-willard-ahdritz" style="display:none;">
  <h3><span>Willard Ahdritz</span><br />Founder &amp; CEO</h3>
  <p>Willard founded Kobalt in 2001.
  <br />Prior to starting Kobalt, he had over 20 years of global publishing experience, and 8 years of consulting experience in Corporate Strategy at L.E.K. Consulting. He also co-founded Telegram Records &amp; Publishing in his native Sweden.
  <br />Willard holds a Bachelor in Electrical Engineering from Rudbecksskolan in Örebro, Sweden, as well as a Master of Science in Finance from the Stockholm School of Economics, NYU Stern Graduate Division, New York.
  <br />Willard also held the rank of Second-lieutenant, Swedish Army, Communication, Research & Development, S1 Enköping.
  <br />He is an NMPA Board Member and an RSA Fellow.
  <br />Willard lives in New York with his family.</p>
</div>
<div class="bio-box" id="bio-richard-sanders" style="display:none;">
  <h3><span>Richard Sanders</span><br />President</h3>
  <p>Richard joined Kobalt in 2012, with over 35 years of experience in worldwide media, entertainment and digital services.
  <br />He most recently held the position of Chairman, International &amp; President, Global Marketing at Sony Music Entertainment
  <br />Prior to joining Kobalt, Richard also held key positions at storied labels like Sony BMG, RCA, V2, and Arista.</p>
</div>
<div class="bio-box" id="bio-james-fitzherbert-brockholes" style="display:none;">
  <h3><span>James Fitzherbert-Brockholes</span><br />CFO</h3>
  <p>James, or “Fitz”, joined Kobalt in 2001.
  <br />He had previously accumulated over 15 years of experience in music publishing, and also worked as a Consultant with L.E.K. Consulting, focusing on M&amp;A strategy and corporate strategy.
  <br />He received an MA from Cambridge University.</p>
</div>
<div class="bio-box" id="bio-richard-thompson" style="display:none;">
  <h3><span>Richard Thompson</span><br />CTO</h3>
  <p>Richard has been with Kobalt since its inception, and is the architect behind Kobalt’s advanced global technology platform, the foundation of Kobalt’s Publishing, Neighbouring Rights and Label Services businesses.
  <br />Thompson participates in various industry initiatives and forums, and is a DDEX board member.
  <br />Before Kobalt, he worked for Oracle in their consulting, development and media divisions.</p>
</div>
<div class="bio-box" id="bio-sas-metcalfe" style="display:none;">
  <h3><span>Sas Metcalfe</span><br />President, Global Creative</h3>
  <p>Sas joined Kobalt in January 2001 as its first employee; her previous roles within Kobalt include Executive VP Creative and Creative Director.
  <br />Prior to Kobalt, Sas spent three years as Head of A&amp;R at EMI Records UK, and before that was Head of A&amp;R at Warner Chappell Music Publishing UK for eight years.
  <br />She started her career at CBS Records where she was a Marketing Assistant, before moving to help set up independent record label Rockin’ Horse Records.</p>
</div>
<div class="bio-box" id="bio-christiaan-winchester" style="display:none;">
  <h3><span>Christiaan Winchester</span><br />Group General Counsel</h3>
  <p>Christiaan joined Kobalt in 2005 as the Head of Legal and Business Affairs, before transitioning to his current role.
  <br />Prior to joining Kobalt, he worked in the Music Group at Harbottle &amp; Lewis, a leading West End media firm, for 5 years.
  <br />Christiaan holds an LLB from Durham University and a LLM from Kings College London. He trained at Clifford Chance in the City of London, qualifying as a solicitor in 1999.
  <br />In his spare time, Christiaan moonlights as a DJ.</p>
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
  <h3><span>Paul Hitchman</span><br />President, Kobalt Label Services International</h3>
  <p> Paul joined Kobalt in 2011, with over 25 years of experience in the music industry.
  <br />He was a co-founder in three prominent digital music companies: Playlouder, CI, and MSP.
  <br />Prior to Kobalt, Paul also worked at BMG Music and Warner Music, and he holds an Economics degree from Cambridge University.
  <br />He is an RSA Fellow, and has a history of curating many contemporary art projects.
  <br />Paul got his start in the music business as a guitarist and record producer.</p>
</div>
<div class="bio-box" id="bio-diarmuid-quinn" style="display:none;">
  <h3><span>Diarmuid Quinn</span><br />President North America, KLS</h3>
  <p>Diarmuid joined Kobalt in 2013, after a successful run as the president of Reprise Records.
  <br />He was also the C.O.O. of Warner Bros. Records Inc., helping develop and guide the careers of artists such as Linkin Park, Michael Buble, Madonna, Green Day, and Faith Hill.
  <br />Prior to his time at Warner Bros., Diarmuid worked closely with Jeff Ayeroff to orchestrate the worldwide marketing plan for the hugely successful “Beatles 1” project.
  <br />He also had successful stints at Hollywood Records, Columbia Records, The Work Group, Epic Records, and MCA.</p>
</div>
<div class="bio-box" id="bio-hans-van-berkel" style="display:none;">
  <h3><span>Hans Van Berkel</span><br />Executive Chairman, KNR</h3>
  <p>Hans joined Kobalt in 2011 to help launch Kobalt Neighbouring Rights, using his 18 years of experience as the Managing Director of the Dutch Neighbouring Rights Society, SENA.
  <br />Prior to joining Kobalt, he also held the position of CFO at Polygram Group.</p>
</div>
<div class="bio-box" id="bio-ryan-wright" style="display:none;">
    <h3><span>Ryan Wright</span><br />SVP, Marketing</h3>
    <p>Ryan brings over 20 years of experience in managing artists and brands globally, with deep expertise in marketing, PR, consumer insight, and brand partnerships.
    <br />Prior to joining Kobalt in 2013, Ryan was Sr. Vice-President at Sony Music, leading its Global Marketing group. Ryan has also previously held senior leadership positions at Sony BMG, BMG, Jive Records, and Samsung.</p>
</div>
<div class="bio-box" id="bio-marissa-mencher" style="display:none;">
    <h3><span>Marissa Mencher</span><br />Head Of Human Resources</h3>
    <p>Marissa joined Kobalt in 2012, after having accumulated over 20 years of Human Resources Management experience in the music industry.
    <br />She previously led Human Resources at Sony Music in North America.
    <br />Prior to joining Kobalt, Marissa also worked at BMG Label Group, RCA Music Group, and J Records.</p>
</div>
<div class="bio-box" id="bio-ann-tausis" style="display:none;">
    <h3><span>Ann Tausis</span><br />Managing Director, KNRL</h3>
    <p>Ann joined Kobalt in 2013 to head up Kobalt Neighbouring Rights, utilizing her 20-plus years of experience in rights management administration.
    <br />This included holding a position as the Director of European Regional Administration at Universal Music Publishing, prior to which she held the position of Global Copyright Director, also at UMP.
    </p>
</div>
<div class="bio-box" id="bio-jeannette-perez" style="display:none;">
    <h3><span>Jeannette Perez</span><br />SVP, Synch &amp; Brand Partnerships, North America</h3>
    <p>Jeannette Perez joined Kobalt in 2014.
    <br />With more than 14 years of experience, Jeannette has expertise in the art of creative music placement, business development, licensing, copyright, and valuation of music rights.
    <br />Jeannette previously held roles in Synch at Sony Music and RCA Records, as well as in Business &amp; Legal Affairs at Sony BMG.
    <br />Jeannette has a J.D. from the University of Miami School of Law.
    </p>
</div>
<div class="bio-box" id="bio-michelle-stoddart" style="display:none;">
    <h3><span>Michelle Stoddart</span><br />SVP, Global Creative Synchronisation</h3>
    <p>Michelle has over 20 years of experience in the music industry, including artist &amp; DJ management and positions within record labels and publishers.
    <br />She has been at Kobalt since 2004 where, in her position of SVP, Global Creative Synchronisation, she heads up the Global synchronisation team of approximately 45 synch staff / agents / sub-publishers.
    <br />Michelle got her start in the music industry at a record shop in her native Canada.
    </p>
</div>
<div class="bio-box" id="bio-simon-dennett" style="display:none;">
    <h3><span>Simon Dennett</span><br />Executive Vice President</h3>
    <p>Simon joined Kobalt in 2006, and shares more than 10 years of music industry experience leading strategic projects and new initiatives.
    <br />Prior to joining Kobalt, Simon worked as a consultant across a wide range of industries.
    <br />He holds a BSc from Bristol University.
    </p>
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
