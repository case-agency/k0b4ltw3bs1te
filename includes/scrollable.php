<h3 class="scroller">More Recent Placements</h3>

<div class="video_scroller">
  <!-- "previous page" action -->
  <a href="javascript:void(0)" class="prev browse left">
    <img src="images/arrow-scroller-left.png" alt="left"/>
  </a>

  <!-- root element for scrollable -->
  <div class="scrollable" id="scrollable">

    <!-- root element for the items -->
    <div class="items">

      <?php
      $totalVideo = count($videoList);
      $numPerRow = 4;
      for ($i = 0; $i < $totalVideo; $i = $i + $numPerRow):
        ?>
        <!-- 1-5 -->
        <div>
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

  <!-- "next page" action -->
  <a href="javascript:void(0)" class="next browse right">
    <img src="images/arrow-scroller-right.png" alt="right"/>
  </a>
</div>


<script type="text/javascript">
  /*<![CDATA[*/

  $(function(){
    // initialize scrollable
    $('.scrollable').scrollable();

    $('.scrollable .items img').click(function(){
      var index = $(this).attr('rel');
      playVideo(index, false);

    });




  });
  /*]]>*/
</script>