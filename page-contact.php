<?php
include("includes/data.php");

$locationList = getLocationList();

$isGoogleCrawling = isGoogleCrawling();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo formatPageTitle('Contact') ?></title>
  <?php include('includes/js.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/input.css" />
  <link rel="stylesheet" type="text/css" href="css/phase-two.css" />
</head>

  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    var navButton = ["#nav-button-london","#nav-button-newyork","#nav-button-losangeles","#nav-button-berlin","#nav-button-nashville","#nav-button-sydney","#nav-button-stockholm"];
    var navButtonJQuery = "#nav-button-london,#nav-button-newyork,#nav-button-losangeles,#nav-button-berlin,#nav-button-nashville,#nav-button-sydney,#nav-button-stockholm";
    var contactPanels = ["#pages-contact-london","#pages-contact-newyork","#pages-contact-losangeles","#pages-contact-berlin","#pages-contact-nashville","#pages-contact-sydney","#pages-contact-stockholm"];
    var contactPanelsJQuery = "#pages-contact-london,#pages-contact-newyork,#pages-contact-losangeles,#pages-contact-berlin,#pages-contact-nashville,#pages-contact-sydney,#pages-contact-stockholm";
    var activeNav = 0;
    var previousNav = 0;

    var map;
    var latlngNew = [];
    var lastMarker = null;

    var locationList = <?php echo json_encode($locationList) ?>;


    function initialize() {
      var latlng = new google.maps.LatLng(0, 0);
      var myOptions = {
        zoom: 17,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
      };
      map = new google.maps.Map(document.getElementById("pages-contact-map-canvas"), myOptions);

    }

    function tabClickHandler(id){
      var el = $('#location_tab_' + id);

      $('.location_tab_con a').removeClass('location_tab_active');
      el.addClass('location_tab_active');

      var tab = getPrettyFragment('tab', 0, el.attr('href'));

      $.get('ajax/contact-location.php', {
        tab: tab
      }, function(data){
        $('#contact_info').html(data);

        var lat =$('#contact_info input[name="location_lat"]').val();
        var lng =$('#contact_info input[name="location_lng"]').val();

        var coord = new google.maps.LatLng(lat, lng);

        if(lastMarker != null){
          lastMarker.setMap(null);
        }

        var marker = new google.maps.Marker({
          position: coord,
          map: map
        });

        map.panTo(coord);


        console.log(lat, lng);

        lastMarker = marker;

      });
    }

    function setActiveNav(nav)
    {
      previousNav = activeNav;
      activeNav = nav;
      $(contactPanelsJQuery).hide();
      $(contactPanels[activeNav]).show();
      map.panTo(latlngNew[nav]);
    }

    $(document).ready(function(){
      $(navButtonJQuery).hover(
      function(event){
        $(this).find('.nav-button-normal').hide();
        $(this).find('.nav-button-active').show();
      },
      function(){
        $(this).find('.nav-button-normal').show();
        $(this).find('.nav-button-active').hide();
        $(navButton[activeNav]).find('.nav-button-normal').hide();
        $(navButton[activeNav]).find('.nav-button-active').show();
      }
    );
      $(navButtonJQuery).click(
      function(event) {
        $(this).find('.nav-button-normal').hide();
        $(this).find('.nav-button-active').show();
        $(navButton[previousNav]).find('.nav-button-normal').show();
        $(navButton[previousNav]).find('.nav-button-active').hide();
      }
    );

      //init main
      $(contactPanelsJQuery).hide();
      $(navButton[0]).find('.nav-button-normal').hide();
      $(navButton[0]).find('.nav-button-active').show();
      $(contactPanels[0]).show();


      initialize();


      tabClickHandler(getPrettyFragment('tab', 5));
    });

  </script>
<body>
<?php include("includes/header.php"); ?>
<section class="main" id="contact">

<div class="wrapper">

<h1>CONTACT<br />KOBALT</h1>

<h3 class="black">FOR GENERAL INQUIRIES</h3>
<p class="black inquiry">Send an email to <a href="mailto:info@kobaltmusic.com">info@kobaltmusic.com</a>.</p>

<h3 class="black">FOR PRESS/MEDIA INQUIRIES</h3>
<p class="black inquiry">Send an email to <a class="email" href="mailto:press@kobaltmusic.com?subject=Press/Media Inquiries">press@kobaltmusic.com</a>.</p>

<h3 class="black">KOBALT OFFICES</h3>

  <div class="location_tab_con">
    <?php
    $totalLocation = count($locationList);
    $locationCounter = 0;
    foreach ($locationList as $locationKey => $location):
      $locationCounter++;
      if ( $locationKey == 5 ) { ?>

      <a href="#!tab=<?php echo $locationKey ?>" id="location_tab_<?php echo $locationKey ?>" class="<?php echo $locationCounter == $totalLocation ? ' location_tab_last' : '' ?> location-tab active" onclick="javascript: tabClickHandler('<?php echo $locationKey ?>');">
        <?php echo $location['name'] ?>
      </a>

      <?php } else { ?>

      <a href="#!tab=<?php echo $locationKey ?>" id="location_tab_<?php echo $locationKey ?>" class="<?php echo $locationCounter == $totalLocation ? ' location_tab_last' : '' ?> location-tab" onclick="javascript: tabClickHandler('<?php echo $locationKey ?>');">
        <?php echo $location['name'] ?>
      </a>

      <?php } ?>
    <?php endforeach ?>
  </div>

  <div class="map_wrapper">
    <div id="pages-contact-map-all">
      <div id="map">
        <div id="pages-contact-map-canvas"><p>test</p></div>
      </div>
    </div>
  </div>

    <div id="contact_info"></div>

    <?php if ($isGoogleCrawling): ?>
      <?php
      echo loadTemplateFile(APP_DIR . '/includes/contact-location.php', array(
          'locationId' => getGoogleCrawlingParameter('tab', 5)
      ));
      ?>
    <?php endif ?>
</div>
</section>
<?php include("includes/footer.php"); ?>
<script type="text/javascript">
  $(document).ready( function() {
    $('.location-tab').click(function() {
      $('.location-tab.active').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>
</body>
</html>

<?php return ?>






























<?php
$pagesContactDiv = array("pages-contact-london", "pages-contact-newyork", "pages-contact-losangeles", "pages-contact-berlin", "pages-contact-nashville", "pages-contact-sydney", "pages-contact-stockholm");
$pagesContactLocation = array("LONDON", "NEW YORK", "LOS ANGELES", "BERLIN", "NASHVILLE", "SYDNEY", "STOCKHOLM");
$pagesContactArrays = array("London", "New York", "Los Angeles", "Berlin", "Nashville", "Sydney", "Stockholm");

for ($divContactTab = 0; $divContactTab < 7; $divContactTab++) {
  echo '<div id="' . $pagesContactDiv[$divContactTab] . '" class="pages-contact-main">';
  echo '<div class="pages-contact-main-container">';
  echo '<div class="pages-contact-address">';
  echo '<div class="pages-contact-address-title">' . $pagesContactLocation[$divContactTab] . '</div>';
  echo '<div class="pages-contact-address-location">';
  if ($json_array_locations[$pagesContactArrays[$divContactTab]][0]['address1'] != "") {
    echo $json_array_locations[$pagesContactArrays[$divContactTab]][0]['address1'] . '<br>';
  }
  if ($json_array_locations[$pagesContactArrays[$divContactTab]][0]['address2'] != "") {
    echo $json_array_locations[$pagesContactArrays[$divContactTab]][0]['address2'] . '<br>';
  }
  if ($json_array_locations[$pagesContactArrays[$divContactTab]][0]['address3'] != "") {
    echo $json_array_locations[$pagesContactArrays[$divContactTab]][0]['address3'] . '<br>';
  }
  if ($json_array_locations[$pagesContactArrays[$divContactTab]][0]['address4'] != "") {
    echo $json_array_locations[$pagesContactArrays[$divContactTab]][0]['address4'] . '<br>';
  }
  if ($json_array_locations[$pagesContactArrays[$divContactTab]][0]['address5'] != "") {
    echo $json_array_locations[$pagesContactArrays[$divContactTab]][0]['address5'] . '<br>';
  }
  echo '<br>';
  //echo '<strong>Directions</strong><br>';
  //echo '<strong>Print Map</strong><br>';
  echo '<br>';
  if ($json_array_locations[$pagesContactArrays[$divContactTab]][0]['phone'] != "") {
    echo '<strong>Phone:</strong> ' . $json_array_locations[$pagesContactArrays[$divContactTab]][0]['phone'] . '<br>';
  }
  if ($json_array_locations[$pagesContactArrays[$divContactTab]][0]['fax'] != "") {
    echo '<strong>AAA Fax:</strong> ' . $json_array_locations[$pagesContactArrays[$divContactTab]][0]['fax'] . '<br>';
  }
  echo '</div>';
  echo '</div>';
  /*
  echo '<div class="pages-contact-staff">';
  echo '<div class="pages-contact-staff-title">' . $pagesContactLocation[$divContactTab] . ' STAFF AAAA</div>';
  for ($i = 0; $i < 4; $i++) {
    echo '<div class="pages-contact-staff-column">';
    for ($j = 0; $j < 5; $j++) {
      $k = ($i * 5) + $j;
      echo '<strong>' . $json_array[$pagesContactArrays[$divContactTab]][$k]['staff_name'] . '</strong><br>' . $json_array[$pagesContactArrays[$divContactTab]][$k]['staff_job_title'] . '<br><br>';
    }
    echo '</div>';
  }
  echo '</div>';
  echo '<div class="clear"></div>';
  echo '</div>';
  */

  echo '</div>';
}
?>
