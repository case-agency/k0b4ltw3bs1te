<?php
include("includes/data.php");

$newReleaseList = decodeFeed(file_get_contents(DATA_NEW_RELEASES));
usort($newReleaseList, 'sortReleaseByDate');

$WhatsHotList = decodeFeed(file_get_contents(DATA_WHAT_HOT));

////billboard data
$BillboardHot = 2;
$json_string_chart = file_get_contents(DATA_CHARTS);
$json_array_chart = decodeFeed($json_string_chart);
for ($currentChart = 0; $currentChart < count($json_array_chart); $currentChart++) {
    if ($json_array_chart[$currentChart]['chart_name'] == "Billboard Hot 100") {
        $BillboardHot = $currentChart;
    }
}

$json_string_billboard = file_get_contents(DATA_CHARTS_JSON . $json_array_chart[$BillboardHot]['chart_data']);
$json_array_billboard = decodeFeed($json_string_billboard);
if (count($json_array_billboard) < 6) {
    $BillboardMax = count($json_array_billboard);
} else {
    $BillboardMax = 5;
}

?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo formatPageTitle('') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('includes/css.php'); ?>
    <?php include('includes/js.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>



</head>

<body>
<?php include('includes/header.php'); ?>
<div class="container slider black">
    <div class="wrapper">
        <a class="homepage-video-link desktop" href="#brandVideo">Play Video</a>
        <a class="homepage-video-link mobile" href="#brandVideo">Play Video</a>
        <a class="homepage-portal-link desktop" style="visibility:hidden; display: block; height: 0;" href="#portalVideo">Play Video</a>
        <a class="homepage-portal-link mobile" style="visibility:hidden; display: block; height: 0;" href="#portalVideo">Play Video</a>
        <div class="module six">
            <h1>It really is this simple</h1>
            <p>Kobalt offers artists, songwriters, and publishers an alternative to the traditional music business model. Through technology, Kobalt empowers creators with transparency, flexibility, ownership and control. The future of music made simple.</p>
            <h6>Learn More</h6>
        </div>
    </div>
</div>
<div class="container red">
    <div class="wrapper">
        <img class="kobalt-k" src="img/kobalt_k.png" />
        <div class="module three">
            <h3 class="homepage">Kobalt<br />Music Publishing</h3>
            <p>Kobalt Music Publishing is the largest independent music publisher in the world. Using our proprietary technology platform, we provide unparalleled transparency with seamless online copyright administration, royalty tracking, and digital collections.</p>
            <a class="button black mobile" href="page-services-music-publishing.php">Learn More</a>
            <a class="button black mobile" href="media/pdf/KobaltMusic_Music-Publishing.pdf">Download PDF</a>
        </div>
        <div class="module one clear-col"></div>
        <div class="module three">
            <h3 class="homepage">Kobalt<br />Label Services</h3>
            <p>Kobalt Label Services (KLS) was established in 2012 for independent artists as an alternative to the traditional Major Label regime. We provide the team and expertise, the global network and infrastructure, and the funding that enables artists to achieve the full potential of their releases around the globe.</p>
            <a class="button black mobile" href="page-services-label-services.php">Learn More</a>
            <a class="button black mobile" href="media/pdf/KobaltMusic_Label-Services.pdf">Download PDF</a>
        </div>
        <div class="module one clear-col"></div>
        <div class="module three">
            <h3 class="homepage">Kobalt<br />Neighbouring Rights</h3>
            <p>Kobalt's unique, modern, and transparent approach to Neighbouring Rights is geared to simplify a very complex process, maximize earnings, and speed up payments. Our direct relationships with key global collection societies reduces repetition, minimizes potential errors, and provides a substantial uplift in revenue.</p>
            <a class="button black mobile" href="page-services-neighbouring-rights.php">Learn More</a>
            <!--<a class="button black coming-soon mobile" href="#coming-soon">Download PDF</a>-->
        </div>
        <div class="full-width module">
            <div class="module three">
                <a class="button black desktop" href="page-services-music-publishing.php">Learn More</a>
                <a class="button black desktop" href="media/pdf/KobaltMusic_Music-Publishing.pdf">Download PDF</a>
            </div>
            <div class="module one clear-col"></div>
            <div class="module three">
                <a class="button black desktop" href="page-services-label-services.php">Learn More</a>
                <a class="button black desktop" href="media/pdf/KobaltMusic_Label-Services.pdf">Download PDF</a>
            </div>
            <div class="module one clear-col"></div>
            <div class="module three">
                <a class="button black desktop" href="page-services-neighbouring-rights.php">Learn More</a>
                <!--<a class="button black coming-soon desktop" href="#coming-soon">Download PDF</a>-->
            </div>
        </div>
    </div>
</div>
<div class="container white" style="position: relative;">
    <div class="hp-controls"><div class="wrapper"><div class="control-prev"></div><div class="control-next"></div></div></div>
    <div class="wrapper">
        <div class="module seven">
            <h2>What's Hot</h2>
        </div>
        <a class="red button-right desktop" href="page-news.php">See More</a>
        <div id="hp-slider">
            <?php
            $WhatsHotListCounter = 0;
            foreach ($WhatsHotList as $WhatsHot):
                $WhatsHotListCounter++;
                if ($WhatsHotListCounter > 5) {
                    break;
                }
                ?>
                <!-- slide 1 -->
                <div class="slide">
                    <!-- slide image -->
                    <img src="images/json/WhatHot<?php echo $WhatsHot['feature_image_url'] ?>" width=960 height=549 alt="<?php echo $WhatsHot['feature_headline'] ?>" />
                    <div class="module whats-hot">
                        <div class="module four">
                            <!-- slide headline -->

                            <h3><?php echo $WhatsHot['feature_headline'] ?></h3>
                        </div>
                        <div class="module six">
                            <!-- slide text -->
                            <p><?php echo $WhatsHot['feature_subline'] ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
        <a class="red button mobile" href="page-news-press-releases.php">See More</a>
    </div>
</div>
<div class="container black">
    <div class="wrapper no-padding">
        <div class="module seven">
            <h2>KEY<br /> Releases</h2>
        </div>
        <a class="red button-right desktop" href="page-news-key-releases.php">View more releases</a>

        <ul id="releaseGrid">
            <div class="swipeable">
                <?php
                $newReleaseListCounter = 0;
                foreach ($newReleaseList as $newRelease):
                    $newReleaseListCounter++;
                    if ($newReleaseListCounter > 8) {
                        break;
                    }
                    ?>

                    <li><img src="images/json/NewReleases/<?php echo $newRelease['release_image'] ?>" width=240 height=240 alt=""/></li>
                <?php endforeach; ?>
            </div>
        </ul>
        <a class="red button mobile" href="page-news-key-releases.php">View more releases</a>
    </div>
</div>
<div class="container patterned">
    <div class="wrapper-padding white no-padding">
        <div class="full-width module">
            <div class="module five">
                <h2>On the Charts<br /><span>The Billboard Hot 100</span></h2>
            </div>
            <a class="button-right red desktop" href="page-news-charts.php">View more charts</a>
            <ul id="chartGrid">
                <div class="swipeable">
                    <li>
                    <?php
                    for ($currentRecord = 0; $currentRecord < $BillboardMax; $currentRecord++) {
                        $billboard_rank = $json_array_billboard[$currentRecord]['entry_this_week_position'];
                        $billboard_uri = $json_array_billboard[$currentRecord]['kobaltsynch_url'];
                        $billboard_title = $json_array_billboard[$currentRecord]['entry_title'];
                        $billboard_artist = $json_array_billboard[$currentRecord]['entry_artist'];
                        ?>
                        <span class="chartItem"><span>#<?= $billboard_rank?></span><span><?= $billboard_title?></span><br/><?= $billboard_artist?></span>                   <?php } ?>
                    </li>
                </div>
            </ul>
            <a class="button red mobile" href="page-news-charts.php">View more charts</a>
        </div>
    </div>
</div>
<div class="container red">
    <div class="wrapper">
        <div class="module six">
            <h2>@KOBALT</h2>
        </div>
        <a class="button-right black twitter-button desktop" target="_new" href="http://www.twitter.com/kobalt"><span class="twitter-icon">Follow</span></a>
        <?php echo loadTemplateFile(APP_DIR . '/includes/_twitter.php'); ?>
        <a class="button black twitter-button mobile" target="_new" href="http://www.twitter.com/kobalt"><span class="twitter-icon">Follow</span></a>
    </div>
</div>


<div id="brandVideo" class="video-js-box video-box" style="display: none;">
</div>

<div id="portalVideo" class="video-js-box video-box" style="display: none;">
</div>

<div id="coming-soon" style="display: none;">

    <h3>Neighbouring Rights PDF Coming Soon</h3>

</div>

<?php include('includes/footer.php'); ?>
<script type="text/javascript">
    <?

    function requireToVar($file){
        ob_start();
        require($file);
        return ob_get_clean();
    }
    $brandVideos=requireToVar('includes/brand_video.php');

    $brandVideos = str_replace(PHP_EOL, "   ", $brandVideos);
    $brandVideos = str_replace("'", "\'", $brandVideos);

    $portalVideos=requireToVar('includes/portal_video.php');

    $portalVideos = str_replace(PHP_EOL, "   ", $portalVideos);
    $portalVideos = str_replace("'", "\'", $portalVideos);

    ?>

    $(' document ').ready( function() {

        $( '.homepage-video-link.desktop' ).fancybox({
            afterShow   : function() {
                $('#brandVideo').html('<?= $brandVideos?>');
            },
            afterClose	: function() {
                $('#brandVideo').html('');
            }
        });

        $( '.homepage-portal-link.desktop' ).fancybox({
            afterShow   : function() {
                $('#portalVideo').html('<?= $portalVideos?>');
            },
            afterClose	: function() {
                $('#portalVideo').html('');
            }
        });

        $( '.homepage-video-link.mobile' ).fancybox({
            afterShow   : function() {
                $('#brandVideo').html('<iframe src="https://www.youtube.com/embed/hhlQ74R8LUI" frameborder="0" allowfullscreen></iframe>');
            },
            afterClose	: function() {
                $('#brandVideo').html('');
            }
        });

        $( '.homepage-portal-link.mobile' ).fancybox({
            afterShow   : function() {
                $('#portalVideo').html('<iframe src="https://www.youtube.com/embed/Qyu_cU_NYKg" frameborder="0" allowfullscreen></iframe>');
            },
            afterClose	: function() {
                $('#portalVideo').html('');
            }
        });

        $('.module.six h6').click( function(){
            newSlideTop = $('.kobalt-k').offset();
            slideTarget = newSlideTop.top - 95;
            $( 'html, body' ).animate({
                scrollTop: slideTarget + 'px'
            }, 700);
        });

        $( '.coming-soon' ).fancybox();

        if (window.location.search === "?portal") {
            var dWidth = $( document ).width();
            if( dWidth > 768 ) {
                console.log( dWidth );
                console.log('desktop');
                $( '.homepage-portal-link.desktop' ).click();
            } else {
				
            }
        } else if (window.location.search === "?auto") {
            var dWidth = $( document ).width();
            if( dWidth > 768 ) {
                console.log('desktop');
                console.log( dWidth );
                $( '.homepage-video-link.desktop' ).click();
            } else {
                console.log('mobile');
                console.log( dWidth );
                $( '.homepage-video-link.mobile' ).click();
            }
        }

        /* initialize homepage slideshow */
        
        var _slider = $('#hp-slider').bxSlider({
            slideSelector: 'div.slide',
            adaptiveHeight: false,
            nextSelector: '.control-next',
            prevSelector: '.control-prev',
            auto: true,
            pause: 3500,
            speed: 500
        });
        
        function doOnOrientationChange()
            {
                switch(window.orientation) 
                {  
                    case -90:
                    case 90:
                        _slider.reloadSlider();
                        break; 
                    default:
                        _slider.reloadSlider();
                    break; 
                }
            }

            window.addEventListener('orientationchange', doOnOrientationChange);

            $('.hp-controls .wrapper').mouseenter(function() {
                _slider.stopAuto();
            }).mouseleave(function() {
                _slider.startAuto();
            });

            $('.bx-wrapper').mouseenter(function() {
                _slider.stopAuto();
            }).mouseleave(function() {
                _slider.startAuto();
            });

    });

</script>
</body>
</html>
