<?php


date_default_timezone_set('UTC');

if (defined('APP_DIR')) {
  return;
}

define('APP_SITE_NAME', 'Kobalt');
define('APP_DEBUG', false);

if (APP_DEBUG) {
  ini_set('display_errors', '1');
}

define('APP_DIR', realpath(dirname(__FILE__) . '/../'));
define('APP_JSONS_DIR', APP_DIR . '/JSONS');

define("DATA_TWITTER_JSON", APP_JSONS_DIR . "/twitter.json");

define("DATA_CHARTS_JSON", APP_JSONS_DIR . "/Charts/");

define("DATA_CHARTS", APP_JSONS_DIR . "/Charts/charts.json");
define("DATA_CHARTS_BILLBOARD_ALBUMS", APP_JSONS_DIR . "/Charts/charts_billboard_albums.json");

define("DATA_HOMEPAGE_FEATURES", APP_JSONS_DIR . "/HomePageFeatures/home_page_features.json");

define("DATA_WHAT_HOT", APP_JSONS_DIR . "/WhatHot/whatsHot.json");

define("DATA_NEW_RELEASES", APP_JSONS_DIR . "/NewReleases/new_releases.json");
define("DATA_SYNC_NEW_RELEASES", APP_JSONS_DIR . "/NewReleases/synch_new_releases.json");

define("DATA_NEWS", APP_JSONS_DIR . "/News/news.json");
define("DATA_NEWS_RECENT", APP_JSONS_DIR . "/News/recent_news.json");
define("DATA_NEWS_PRESS_RELEASE", APP_JSONS_DIR . "/News/press_release.json");
define("DATA_NEWS_IN_THE_NEWS", APP_JSONS_DIR . "/News/kobalt_in_the_news.json");

define("DATA_RECENT_SYNCH_VIDEOS", APP_JSONS_DIR . "/RecentSynchVideos/recent_synch_videos.json");

define("DATA_ROSTER_ARTIST", APP_JSONS_DIR . "/Rosters/roster_artist.json");
define("DATA_ROSTER_AUSTRILIA", APP_JSONS_DIR . "/Rosters/roster_australia.json");
define("DATA_ROSTER_COMPANIES", APP_JSONS_DIR . "/Rosters/roster_companies.json");
define("DATA_ROSTER_FEATURED", APP_JSONS_DIR . "/Rosters/roster_features.json");
define("DATA_ROSTER_GERMANY", APP_JSONS_DIR . "/Rosters/roster_germany.json");
define("DATA_ROSTER_NASHVILLE", APP_JSONS_DIR . "/Rosters/roster_nashville.json");
define("DATA_ROSTER_NEW_SIGNINGS", APP_JSONS_DIR . "/Rosters/roster_new_signings.json");
define("DATA_ROSTER_NEW_SIGNINGS_HPG", APP_JSONS_DIR . "/Rosters/roster_new_signing_homepage.json");
define("DATA_ROSTER_URBAN", APP_JSONS_DIR . "/Rosters/roster_urban.json");


define("DATA_PLAYLIST_FEATURED", APP_JSONS_DIR . "/Playlists/playlists_featured.json");
define("DATA_PLAYLIST_STAFF", APP_JSONS_DIR . "/Playlists/playlists_staff.json");
define("DATA_PLAYLIST_COMPOSERS", APP_JSONS_DIR . "/Playlists/playlists_composers.json");

define("DATA_STAFF", APP_JSONS_DIR . "/Contacts/staff.json");

//custom
define("DATA_SUB_MENU", APP_JSONS_DIR . "/SubMenu/submenu.json");
define("DATA_SUB_MENU2", APP_JSONS_DIR . "/SubMenu/submenu2.json");
define("DATA_STAFF_LOCATIONS", APP_JSONS_DIR . "/Contacts/locations.json");

define("DATA_CUE_LISTS", "/var/www/faramir_data/episode_list/episodes.json");


define("PORTAL_MAINTENANCE", APP_DIR . "/data/maintenance.txt");

//Youtube Licensing FAQ
define("DATA_YOUTUBE_FAQ", APP_JSONS_DIR . "/Youtube/youtubefaq.json");

//Jobs
define("DATA_JOBS_PATH", APP_JSONS_DIR . "/Jobs");

require_once (APP_DIR . "/includes/functions.php");
require_once (APP_DIR . "/includes/myTools.php");


logGoogleCrawlerParameter();


