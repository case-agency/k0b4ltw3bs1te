<div class="module full-width homepage-twitter"></div>

<script type="text/javascript">
    /*<![CDATA[*/

    function updateTwitter() {
       $.get('ajax/twitter.php', {}, function (data) {
              $('.homepage-twitter').html(data);
          });
    }

    updateTwitter();

    /*]]>*/
</script>