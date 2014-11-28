<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "1410178712-wq7YpcYnqc3MvSfcpTHZu1CEAtp5p6hpHehvAU0",
    'oauth_access_token_secret' => "4AjSLWTQcabF5cx1zlsgcF0tQWKbH8gL2RhLEPccNzJzG",
    'consumer_key' => "JKhf5pgpbofqnnFVGIB7h324G",
    'consumer_secret' => "tJYmomTdoN87wvAYc6Jw03JlDzjqzmObNAQ4SKlxDVNZnya4jg"
);
	
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
 
$requestMethod = "GET";
 
$getfield = '?screen_name=matthew121588&count=20';
 
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

?>