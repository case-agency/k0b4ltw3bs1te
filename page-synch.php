<?php
include("includes/data.php");
$videoList = decodeFeed(file_get_contents(DATA_RECENT_SYNCH_VIDEOS));
$videoFeed = getVideoFeed();


$newReleaseListBoth = splitRecentReleases(DATA_NEW_RELEASES);
$newReleaseList = $newReleaseListBoth['recentList'];
usort($newReleaseList, 'sortReleaseByDate');

$playListFeatured = decodeFeed(file_get_contents(DATA_PLAYLIST_FEATURED));
$playListStaff = decodeFeed(file_get_contents(DATA_PLAYLIST_STAFF));
$playListComposers = decodeFeed(file_get_contents(DATA_PLAYLIST_COMPOSERS));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title><?php echo formatPageTitle('SYNCH') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/new-elements.css" type="text/css" />
    <link rel="stylesheet" href="css/font-face.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/header.css" type="text/css" />
    <link rel="stylesheet" href="css/footer.css" type="text/css" />
    <link rel="stylesheet" href="css/pages.css" type="text/css" />

    <?php include("includes/css.php"); ?>

    <link rel="stylesheet" href="css/page-synch.css" type="text/css"/>



    <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet" type="text/css">

    <?php include("includes/js.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/scrollable-horizontal.css"/>
    <!-- jQuery Library + UI Tools -->
    <script src="http://cdn.jquerytools.org/1.2.7/all/jquery.tools.min.js"></script>


    <script type="text/javascript">
        /*<![CDATA[*/

        function doSearch(form) {
            var el = $(form);
            var elKeyword = el.find('[name="keyword"]');

            if (elKeyword.attr('title') == elKeyword.val()) {
                alert('Please enter a search term.');
                return;
            }

            window.location.href = el.attr('action') + elKeyword.val()+'/order-by/artist/all_term/Yes/control/Anywhere/order/asc/0';
        }

        $(function () {
            $(".defaultText").focus(function (srcc) {
                if ($(this).val() == $(this)[0].title) {
                    $(this).removeClass("defaultTextActive");
                    $(this).val("");
                }
            });

            $(".defaultText").blur(function () {
                if ($(this).val() == "") {
                    $(this).addClass("defaultTextActive");
                    $(this).val($(this)[0].title);
                }
            });

            $(".defaultText").blur();
        });

        /*]]>*/
    </script>

</head>

<body>

<?php include("includes/header.php"); ?>
<div id="main-container">

    <div id="main-holder">
        <div id="main-contents">


            <div class="title_con">
                <h1>KOBALT<br />SYNCH</h1>
            </div>

            <div style="float:left">
            <div id="pages-synch-top-header-search">

                <div class="pages-synch-recent-body"
                     style="color:#525252; font-size: 12px; width: 460px; font-weight: bold">

                    <div class="pages-synch-top-header">RECENT PLACEMENTS</div>
                </div>

            </div>

            <div id="pages-synch-top-left-col">
                <div id="pages-synch-top-video">

                    <div id="video_con">
                        <?php /* <img src="images/ajax-loader-run.gif" alt="" id="video_loader_indicator" style="position: absolute; top: 50%; left: 50%"/>*/ ?>
                        <video width="642" height="465" class="video-js vjs-default-skin" controls preload="auto" id="video_tag">
                        </video>
                    </div>
                </div>
                <p class="pages-synch-recent-body" id="video_description"></p>



                <?php
                /*
                echo loadTemplateFile('includes/scrollable.php', array(
                    'videoList' => $videoList
                ))
                */
                ?>
            </div>

            <script type="text/javascript">

                var videoFeed = <?php echo json_encode($videoFeed) ?>;
                var player = null;

                function setupPlayer() {
                    player = _V_('video_tag', {
                        preload:"auto",
                        controls:true,
                        autoplay:false,
                        preload:"auto",
                        poster:'images/json/RecentSynchVideos' + videoFeed[0].image
                    }, function () {

                    });

                    player.addEvent('loadeddata', function () {


                    });


                }

                function playVideo(index, autoPlay) {


                    var description = videoFeed[index].description;

                    if(videoFeed[index].artist_name != null && videoFeed[index].artist_name != "")
                        description += "<br>"+ videoFeed[index].song_title+ " - "+videoFeed[index].artist_name;
                    $('#video_description').html(description);
                    player.src(videoFeed[index].fileList);
                    console.log($('.vjs-poster').src);
                    $('.vjs-poster').attr("src", 'images/json/RecentSynchVideos'+videoFeed[index].image);
                    console.log($('.vjs-poster').src);

                    if (autoPlay) {
                        player.play();
                    }


                }

                $(function () {
                    setupPlayer();
                    playVideo(0, false);


                });

            </script>
        </div>

                <div id="pages-synch-top-right-col">
                <?php
                    echo loadTemplateFile('includes/scrollable.php', array(
                    'videoList' => $videoList
 	                ))
                ?>
                </div>
                <div class="clear"></div>

                <div id="pages-synch-top-divide"></div>

                <div id="pages-synch-bot-left-col">
                    <div id="pages-synch-bot-staff-picks">
                         <div id="pages-synch-releases-top">
                              <div class="pages-synch-releases-bot-header">NEW RELEASES</div>
                              <div id="pages-synch-bot-left-divide"></div>
                    </div>

                    <?php
                    $newReleaseListCounter = 0;
                    foreach ($newReleaseList as $newRelease):

                        $newReleaseListCounter++;
                        if ($newReleaseListCounter > 4) {
                            break;
                        }
                        ?>
                        <div class="pages-synch-album-container">
                            <div class="pages-synch-album-image-hold">
                                <a href="<?php echo $newRelease['release_website_url'] ?>">
                                    <img src="images/json/NewReleases/<?php echo $newRelease['release_image'] ?>" alt=""/>
                                </a>
                            </div>
                            <div class="pages-synch-album-text-hold">
                                <div class="pages-synch-album-text-song">
                                    <a href="<?php echo $newRelease['release_website_url'] ?>">
                                        <strong><?php echo truncateText($newRelease['release_title'], 10) ?></strong>
                                    </a>
                                </div>

                                <div class="pages-synch-album-text-artist"><?php echo $newRelease['release_artist_name'] ?></div>

                                <div class="pages-synch-album-text-date">
                                    <?php echo  formateKobaltDate($newRelease['release_date']) ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="clear"></div>
                </div>


            </div>


            <div id="pages-synch-bot-right-col">
                <a name="section_about"></a>

                <div class="pages-synch-releases-right-header">ABOUT KOBALT <span>SYNCH<span></div>
                <div id="pages-synch-bot-right-divide"></div>

                <p class="pages-synch-bot-right-body">
                    Kobalt has 45 global synch staff, agents & sub-publishers pitching and licensing songs for high-profile uses in
                    advertising, film, TV, games and other mediums. The extensive team works across borders to find the right
                    partners for your music and to maximize your synch income. With Kobalt's online portal, clients can view real
                    time updates on synch requests for works and follow the licensing process from the initial quote to payment and
                    completion of the synch.
                </p>

                <div id="pages-synch-bot-request">
                    <a href="page-licensing-requests.php" class="pages-synch-make-a-request">MAKE A LICENSING REQUEST</a>
                </div>
                <div class="clear"></div>
            </div>

            <div id="pages-synch-big-col">
                <div id="pages-synch-bot-staff-picks">
                    <div id="pages-synch-releases-top">
                        <div class="pages-synch-releases-bot-header">FILM & TV COMPOSERS</div>
                        <div id="pages-synch-bot-left-divide"></div>
                    </div>

                    <?php
                    $playListStaffCounter = 0;
                    foreach ($playListComposers as $playList):
                        $playListStaffCounter++;
                        ?>
                        <div class="pages-synch-brick">
                            <img alt="" src="<?php echo $playList['playlist_thumbnail_image_url'] ?>">
                            <strong><?php echo $playList['playlist_composer_name'] ?></strong>
                        </div>
<!--                        --><?php //if ($playListStaffCounter % 4 == 0): ?>
<!--                        <div class="clear"></div>-->
<!--                    --><?php //endif ?>
                    <?php endforeach; ?>

                    <div class="clear"></div>
                </div>


            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
<?php include("includes/wrapper-end.php"); ?>

<script src="http://vjs.zencdn.net/c/video.js"></script>
</body>
</html>
