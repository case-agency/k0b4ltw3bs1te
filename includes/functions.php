<?php

require_once 'formatting.php';

function do404($msg = 'Page not found.')
{
    header("HTTP/1.0 404 Not Found");
    header("Status: 404 Not Found");
    echo $msg;
    exit();
}

function loadTemplateFile($__ct___templatePath__, $__ct___vars__ = array())
{
    extract($__ct___vars__, EXTR_OVERWRITE);
    $__ct___template_return = '';
    ob_start();
    require $__ct___templatePath__;
    $__ct___template_return = ob_get_contents();
    ob_end_clean();
    return $__ct___template_return;
}

function sortNewsByDate($a, $b)
{
    return sortByDate($a, $b, 'entry_date');
}

function sortNewsByPositionDate($a, $b)
{
	$position = sortByPosition($a, $b, 'entry_news_position');
	if($position == 0) {
    	return sortByDate($a, $b, 'entry_date');
    } else {
    	return $position;
    }
}

function sortReleaseByDate($a, $b)
{
    return sortByDate($a, $b, 'release_date');
}

function sortByPosition($a, $b, $positionKey) {
	$pos1 = $a[$positionKey];
	$pos2 = $b[$positionKey];

    if ($pos1 == $pos2) {
        return 0;
    } elseif ($pos1 > $pos2) {
        return -1;
    } else {
        return 1;
    }
}


function sortByDate($a, $b, $dateKey)
{
    $timeParts1 = explode('/', $a[$dateKey]);
    $timeParts2 = explode('/', $b[$dateKey]);

    $ts1 = strtotime($timeParts1[2] . '/' . $timeParts1[1] . '/' . $timeParts1[0]);
    $ts2 = strtotime($timeParts2[2] . '/' . $timeParts2[1] . '/' . $timeParts2[0]);


    if ($ts1 === $ts2) {
        return 0;
    } elseif ($ts1 > $ts2) {
        return -1;
    } else {
        return 1;
    }
}

function truncateText($text, $numWords = 55, $endString = '...', $stripTags = false)
{

    if ($stripTags) {
        $text = strip_tags($text, '<a>');
    }
    $excerpt_length = $numWords;


    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
        array_pop($words);
        array_push($words, $endString);
        $text = implode(' ', $words);
    }

    return $text;
}

function getGet($key, $default = null)
{
    if (!isset($_GET[$key])) {
        return $default;
    }

    return $_GET[$key];
}

function __e($string)
{
    return htmlspecialchars($string, ENT_NOQUOTES, 'UTF-8');
}

function isGoogleCrawling()
{

    if (isset($_GET['_escaped_fragment_'])) {
        return true;
    } else {
        return false;
    }
}

function getGoogleCrawlingParameter($key, $default = null)
{
    if (!isGoogleCrawling()) {
        return $default;
    }


    parse_str(urldecode($_GET['_escaped_fragment_']), $crawlerParams);

    logMessage('getGoogleCrawlingParameter=' . $key . ', ' . print_r($crawlerParams, true));

    if (isset($crawlerParams[$key])) {
        return $crawlerParams[$key];
    } else {
        return $default;
    }
}

function logGoogleCrawlerParameter()
{
    if (!APP_DEBUG) {
        return;
    }

    if (!isGoogleCrawling()) {
        return;
    }

    $log = APP_DIR . '/log';

    if (!is_writable($log)) {
        return;
    }

    $body = print_r($_GET, true);
    file_put_contents($log . '/google_crawler.log', $body, FILE_APPEND | LOCK_EX);
}

function logMessage($message)
{
    $log = APP_DIR . '/log';

    if (!is_writable($log)) {
        return;
    }


    file_put_contents($log . '/message.log', $message, FILE_APPEND | LOCK_EX);
}

function getLocationList()
{
    $data = file_get_contents(DATA_STAFF_LOCATIONS);
    $list = decodeFeed($data);


    $staffData = file_get_contents(DATA_STAFF);
    $staffList = decodeFeed($staffData);

    ksort($list);

    $ret = array();

    foreach ($list as $itemKey => $item) {
        $item[0]['name'] = $itemKey;

        if (isset($staffList[$itemKey])) {
            $item[0]['staff_list'] = $staffList[$itemKey];
        } else {
            $item[0]['staff_list'] = array();
        }
        $ret[] = $item[0];
    }


    return $ret;
}


/*
****

Access level 	Read-only
About the application permission model
Consumer key 	D5kBktMthP21jAACojTwA
Consumer secret 	vko1d7AMljA7Zw8tmnNcVIIQRq9wtRBvEi5vzPZTx0
Request token URL 	https://api.twitter.com/oauth/request_token
Authorize URL 	https://api.twitter.com/oauth/authorize
Access token URL 	https://api.twitter.com/oauth/access_token
Callback URL 	None
Sign in with Twitter 	No


Access token 	28351350-sCiXKdosDZQZ7urhwsiaS2p2q0utfSHfIJvoaRufV
Access token secret 	5Hp5NWn6AOtLP0cG2UXXX1X5PIq8iKKdjKIbHmYBlQ
Access level 	Read-only


****
*/

function getTwitterFeed()
{
	$time_cache = 0;
     if(file_exists(DATA_TWITTER_JSON)) {
     	$stat = stat(DATA_TWITTER_JSON);
     	$now = time();
        $time_cache = $now - $stat['mtime'];
        //print($time_cache);
     } /*else {
     	print("cannot find ".DATA_TWITTER_JSON);
     }*/
     if(!file_exists(DATA_TWITTER_JSON) or $time_cache > 600 ) {
        $data = getTwitterFeed11();

        if($data != '') {
           $h = fopen(DATA_TWITTER_JSON, 'w+') or die('Couldnt open '.DATA_TWITTER_JSON);
           fwrite($h, $data);
           fclose($h);
        } else {
           $data = file_get_contents(DATA_TWITTER_JSON);
        }
     } else {
       $data = file_get_contents(DATA_TWITTER_JSON);
     }

    $feedData = decodeFeed($data);

    return $feedData;
}


function getTwitterFeed11() {

	require_once('TwitterAPIExchange.php');

	$settings = array(
	    'oauth_access_token' => "28351350-sCiXKdosDZQZ7urhwsiaS2p2q0utfSHfIJvoaRufV",
	    'oauth_access_token_secret' => "5Hp5NWn6AOtLP0cG2UXXX1X5PIq8iKKdjKIbHmYBlQ",
	    'consumer_key' => "D5kBktMthP21jAACojTwA",
	    'consumer_secret' => "vko1d7AMljA7Zw8tmnNcVIIQRq9wtRBvEi5vzPZTx0"
	);

	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$getfield = '?include_entities=true&include_rts=true&screen_name=kobalt&count=1&exclude_replies=true';
	$requestMethod = 'GET';
	$twitter = new TwitterAPIExchange($settings);


	$data = $twitter->setGetfield($getfield)
				 ->buildOauth($url, $requestMethod)
				 ->performRequest();

	return $data;

}


function getTwitterFeed1()
{
    $data = file_get_contents('https://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts=true&screen_name=kobalt&count=1');
    return $data;
}

function parseKobaltDate($dateString)
{
    $timeParts = explode('/', $dateString);
    $timestamp = strtotime($timeParts[2] . '-' . $timeParts[1] . '-' . $timeParts[0]);
    $year = date('Y', $timestamp);
    $month = date('M', $timestamp);
    $day = date('d', $timestamp);

    return array(
        'year' => $year,
        'month' => $month,
        'day' => $day,
        'timestamp' => $timestamp
    );
}

function formateKobaltDate($dateString)
{
    $dateInfo = parseKobaltDate($dateString);

    return $dateInfo['day'] . ' ' . $dateInfo['month'] . ' ' . $dateInfo['year'];
}

function formatKobaltDateAgo($dateString)
{
    $dateInfo = parseKobaltDate($dateString);

    if ($dateInfo['timestamp'] <= time()) {
        return myTools::formatDateAgo(strtotime(
            date('Y-m-d', $dateInfo['timestamp'])
        ));
    } else {
        return formateKobaltDate($dateString);
    }
}

function kobaltAgo($dateString)
{
    $dateInfo = parseKobaltDate($dateString);

    return ago($dateInfo['timestamp']);
}


function ago($time)
{
    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");

    $now = time();

    $difference = $now - $time;
    $tense = "ago";

    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if ($difference != 1) {
        $periods[$j] .= "s";
    }

    return "$difference $periods[$j] 'ago' ";
}

function getServiceSectionList()
{

    static $list = array(
        array(
            'id' => '0',
            'name' => 'Music Publishing',
            'page_list' => array(
                array('id' => '0', 'name' => 'OVERVIEW'),
                array('id' => '1', 'name' => 'GLOBAL DIRECT REGISTRATIONS'),
                array('id' => '2', 'name' => 'ONLINE ROYALTY ANALYSIS'),
                array('id' => '3', 'name' => 'A&amp;R CREATIVE SERVICES'),
                array('id' => '4', 'name' => 'GLOBAL ROYALTY TRACKING'),
                array('id' => '5', 'name' => 'ONLINE ADVANCES'),
                array('id' => '6', 'name' => 'WEEKLY ACCOUNT BALANCES'),
                array('id' => '7', 'name' => 'REAL-TIME TRANSPARENT DATA'),
                array('id' => '8', 'name' => 'SYNCH LICENSING &amp; TRACKING'),
                array('id' => '9', 'name' => 'YOUTUBE ADMINISTRATION')
            )
        ),
        array(
            'id' => '1',
            'name' => 'Label Services',
            'page_list' => array(
                array('id' => '0', 'name' => 'OVERVIEW'),
                array('id' => '1', 'name' => 'Distribution'),
                array('id' => '2', 'name' => 'Campaign management'),
                array('id' => '3', 'name' => 'Marketing'),
                array('id' => '4', 'name' => 'Transparent accounting'),
                array('id' => '5', 'name' => 'Data Analytics'),
                array('id' => '6', 'name' => 'Direct to Fan Commerce'),
                array('id' => '7', 'name' => 'Production'),
                array('id' => '8', 'name' => 'Flexible deal terms'),
                array('id' => '9', 'name' => 'Synch'),
            )
        ),
        array(
            'id' => '2',
            'name' => 'Neighbouring Rights',
            'page_list' => array(
                array('id' => '0', 'name' => 'OVERVIEW'),
                array('id' => '1', 'name' => 'Global Direct Collections'),
                array('id' => '2', 'name' => 'Expert Neighbouring Rights Team'),
                array('id' => '3', 'name' => 'Retroactive Payment Search'),
                array('id' => '4', 'name' => 'Pre Distribution Health Check'),
                array('id' => '5', 'name' => 'Online Client Portal'),
                array('id' => '6', 'name' => 'Dedicated Client Service Team'),
                array('id' => '7', 'name' => 'Global Performance Tracking'),
                array('id' => '8', 'name' => 'Monthly Payments'),
                array('id' => '9', 'name' => null),
            )
        )
    );

    return $list;
}

function prepareJSON($input)
{

    //This will convert ASCII/ISO-8859-1 to UTF-8.
    //Be careful with the third parameter (encoding detect list), because
    //if set wrong, some input encodings will get garbled (including UTF-8!)
    $input = mb_convert_encoding($input, 'UTF-8', 'ASCII,UTF-8,ISO-8859-1');

    //Remove UTF-8 BOM if present, json_decode() does not like it.
    if (substr($input, 0, 3) == pack("CCC", 0xEF, 0xBB, 0xBF))
        $input = substr($input, 3);

    return $input;
}


function getVideoFeed()
{
    $videoList = decodeFeed(file_get_contents(DATA_RECENT_SYNCH_VIDEOS));
    $videoFeed = array();

    foreach ($videoList as $video) {
        $videoFeed[] = array(
            'image' => $video['entry_frame_img_url'],
            'description' => $video['entry_project_description'],
            'artist_name' => $video['entry_artist_name'],
            'song_title' => $video['entry_song_title'],
            'fileList' => array(
                array(
                    'src' => $video['entry_h264_url'],
                    'type' => 'video/mp4',

                ),
                array(
                    'src' => $video['entry_ogg_theora_url'],
                    'type' => 'video/ogg',
                    'poster' => $video['entry_preview_img_url']
                )
            )
        );
    }

    return $videoFeed;
}


function formatPageTitle($pageName)
{
    $title = APP_SITE_NAME;

    if (strlen($pageName) > 0) {
        $title = $pageName . ' | ' . $title;
    }

    return $title;

}


function decodeFeed($plainText, $forceUTF8 = true)
{
    if ($forceUTF8) {
        //   $plainText = utf8_encode($plainText);
    }

    return json_decode($plainText, true);
}


function splitRecentReleases($feed = DATA_NEW_RELEASES)
{
    $newsList = $newReleaseList = decodeFeed(file_get_contents($feed));

    usort($newsList, 'sortReleaseByDate');


    $now = time();
    $recentList = array();
    $upcomingList = array();

    foreach ($newsList as $news) {
        $dateInfo = parseKobaltDate($news['release_date']);

        if ($dateInfo['timestamp'] <= $now) {
            $recentList[] = $news;
        } else {
            $upcomingList[] = $news;
        }
    }

    return array(
        'recentList' => $recentList,
        'upcomingList' => $upcomingList
    );
}

function youtubeFAQ(){

    $youtubeFAQList = decodeFeed(file_get_contents(DATA_YOUTUBE_FAQ));
    $faq = array();
     foreach ($youtubeFAQList as $faqItem) {
         $faq[] = $faqItem;
    }

    return array('faq' => $faq);
}

/*Only to be used for job posting*/

function sort_by_date($a, $b) {
	
   $a = strtotime($a['date_published']);
   $b = strtotime($b['date_published']);
	
   return ($a > $b) ? -1 : 1;
}

function getJobs($id = null, $default = null) {
    if (!is_null($id) && file_exists(DATA_JOBS_PATH . "/$id.json")) {
        $jobs = decodeFeed(file_get_contents(DATA_JOBS_PATH . "/$id.json"));
        //echo "<script>console.debug(" . json_encode($jobs) . ");</script>";
	
	/*Amend order of job posts*/

	$current = $jobs['current_jobs'];

	uasort($current, 'sort_by_date');
	$jobs['current_jobs'] = $current;

        return $jobs;
    } else {
        return $default;
    }
}

function newReverseLookupById($newsId)
{
    $feedList = array(
        'news'=>DATA_NEWS_RECENT,
        'press_release'=>DATA_NEWS_PRESS_RELEASE,
        'in_the_News'=>DATA_NEWS_IN_THE_NEWS
    );

    foreach ($feedList as $type=>$feed) {
        $newsList = decodeFeed(file_get_contents($feed));
        foreach ($newsList as $news) {
            if ($news['entry_id'] == $newsId) {
                return array(
                    'news' => $news,
                    'type' => $type
                );
            }
        }
    }

    return null;
}


function auto_link($text)
{
    $pattern = "/(((http[s]?:\/\/)|(www\.))(([a-z][-a-z0-9]+\.)?[a-z][-a-z0-9]+\.[a-z]+(\.[a-z]{2,2})?)\/?[a-z0-9.,_\/~#&=;%+?-]+[a-z0-9\/#=?]{1,1})/is";
    $text = preg_replace($pattern, " <a href='$1'>$1</a>", $text);
    // fix URLs without protocols
    $text = preg_replace("/href='www/", "href='http://www", $text);
    return $text;
}