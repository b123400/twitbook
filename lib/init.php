<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: Don Ip's Plugs
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 

require_once 'facebook.php';
date_default_timezone_set("Asia/Taipei");

$appapikey = 'your facebook key';
$appsecret = 'your facebook secret';

function facebook_client() {
  global $appapikey, $appsecret;
  static $facebook = null;
  if ($facebook === null) {
    $facebook = new Facebook($appapikey, $appsecret);
    if (!$facebook) {
      error_log('Could not create facebook client.');
    }

  }
  return $facebook;
}
function get_elapsedtime($time) {

    $gap = time() - $time;

    if ($gap < 5) {
        return 'less than 5 seconds ago';
    } else if ($gap < 10) {
        return 'less than 10 seconds ago';
    } else if ($gap < 20) {
        return 'less than 20 seconds ago';
    } else if ($gap < 40) {
        return 'half a minute ago';
    } else if ($gap < 60) {
        return 'less than a minute ago';
    }

    $gap = round($gap / 60);
    if ($gap < 60)  { 
        return $gap.' minute'.($gap > 1 ? 's' : '').' ago';
    }

    $gap = round($gap / 60);
    if ($gap < 24)  { 
        return 'about '.$gap.' hour'.($gap > 1 ? 's' : '').' ago';
    }

    return date('h:i A F d, Y', $time);

}
if(facebook_client()->get_loggedin_user()&&facebook_client()->api_client->session_key&&$_COOKIE['twitbook_facebook_user_id']!=facebook_client()->get_loggedin_user()&&$_COOKIE['twitbook_facebook_user_id']!=facebook_client()->api_client->session_key){
	setcookie('twitbook_facebook_session_key', facebook_client()->api_client->session_key ,time()+60*60*24*30 ,'/' ,'.b123400.net');
	setcookie('twitbook_facebook_user_id', $user_id ,time()+60*60*24*30 ,'/' ,'.b123400.net');
}
$user_id=facebook_client()->get_loggedin_user();
?>