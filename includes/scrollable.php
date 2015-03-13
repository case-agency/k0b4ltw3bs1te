<h3 class="scroller"><br /></h3>

<div class="video_scroller">

  <!-- root element for scrollable -->
  <!-- div class="scrollable" id="scrollable" -->

    <!-- root element for the items -->
    <div class="items">

      <?php
      $totalVideo = count($videoList);
      if($totalVideo > 18) {
          $totalVideo = 18;
      }
      $numPerRow = 3;
      for ($i = 0; $i < $totalVideo; $i = $i + $numPerRow):
        ?>
        <!-- 1-5 -->

        <div class="row">
          <?php
          for ($j = $i; $j < $i + $numPerRow && $j < $totalVideo; $j++):
            $video = $videoList[$j];
            ?>
            <img src="images/json/RecentSynchVideos<?php echo $video['entry_preview_img_url'] ?>" alt=""  rel="<?php echo $j ?>" class="<?php echo ($j == $i + $numPerRow - 1 || $j + 1 == $totalVideo) ? 'last':'' ?>"/>
        <?php endfor ?>
        </div>
<?php endfor ?>

    </div>

  </div>


<script type="text/javascript">
  /*<![CDATA[*/

  $(function(){
    // initialize scrollable
    $('.scrollable').scrollable();

    $('.items .row img').click(function(){
      var index = $(this).attr('rel');
      playVideo(index, false);

    });




  });
  /*]]>*/
</script>