<?php

$locationList = getLocationList();

if (!isset($locationList[$locationId])) {
  return;
}

$locationData = $locationList[$locationId];
?>
<div class="pages-contact-main">
  <h3><?php echo $locationData['name'] ?></h3>
  <p>
    <?php if (strlen($locationData['address1']) > 0): ?>
      <?php echo $locationData['address1'] ?><br/>
    <?php endif ?>
    <?php if (strlen($locationData['address2']) > 0): ?>
      <?php echo $locationData['address2'] ?><br/>
    <?php endif ?>
    <?php if (strlen($locationData['address3']) > 0): ?>
      <?php echo $locationData['address3'] ?><br/>
    <?php endif ?>
    <?php if (strlen($locationData['address4']) > 0): ?>
      <?php echo $locationData['address4'] ?><br/>
    <?php endif ?>
    <?php if (strlen($locationData['address5']) > 0): ?>
      <?php echo $locationData['address5'] ?><br/>
    <?php endif ?>
    <?php if (strlen($locationData['google-map-link']) > 0): ?>
        <a class="mobile" target="_blank" href="<?php echo $locationData['google-map-link'] ?>">Open in Google Maps</a>
    <?php endif ?>

    <br/>

    <?php if (strlen($locationData['phone']) > 0): ?>
      <strong>Phone:</strong> <?php echo $locationData['phone'] ?><br/>
    <?php endif ?>

    <?php if (strlen($locationData['fax']) > 0): ?>
      <strong>Fax:</strong> <?php echo $locationData['fax'] ?><br/>
    <?php endif ?>

  </p>
</div>

<input type="hidden" name="location_lat" value="<?php echo $locationData['lat'] ?>" />
<input type="hidden" name="location_lng" value="<?php echo $locationData['lng'] ?>" />