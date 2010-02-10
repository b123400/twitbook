<?php
require_once('lib/twitterOAuth.php');

/* Sessions are used to keep track of tokens while user authenticates with twitter */
session_start();
/* Consumer key from twitter */
$consumer_key = 'your twitter key';
/* Consumer Secret from twitter */
$consumer_secret = 'your twitter secret';
/* Set state if previous session */
$state = $_SESSION['oauth_state'];
/* Checks if oauth_token is set from returning from twitter */
$session_token = $_SESSION['oauth_request_token'];
/* Checks if oauth_token is set from returning from twitter */
$oauth_token = $_REQUEST['oauth_token'];
/* Set section var */
$section = $_REQUEST['section'];

/* Clear PHP sessions */
if ($_REQUEST['test'] === 'clear') {/*{{{*/
  session_destroy();
  session_start();
}/*}}}*/
/*
if($_SESSION['oauth_access_token']&&$_SESSION['oauth_access_token_secret']&&((!$_COOKIE['twitbook_twitter_access_token']&&!$_COOKIE['twitbook_twitter_access_token_secret'])||($_SESSION['oauth_access_token']!=$_COOKIE['twitbook_twitter_access_token']||$_SESSION['oauth_access_token_secret']!=$_COOKIE['twitbook_twitter_access_token_secret']))){
	setcookie('twitbook_twitter_access_token', $_SESSION['oauth_access_token'] ,time()+60*60*24*30 ,'/' ,'.b123400.net');
	setcookie('twitbook_twitter_access_token_secret', $_SESSION['oauth_access_token_secret'] ,time()+60*60*24*30 ,'/' ,'.b123400.net');
	setcookie('twitbook_twitter_state', $_SESSION['oauth_state'] ,time()+60*60*24*30 ,'/' ,'.b123400.net');
}
if(!$_SESSION['oauth_access_token']&&!$_SESSION['oauth_access_token_secret']&&$_COOKIE['twitbook_twitter_access_token']&&$_COOKIE['twitbook_twitter_access_token_secret']){
	$_SESSION['oauth_access_token']=$_COOKIE['twitbook_twitter_access_token'];
	$_SESSION['oauth_access_token_secret']=$_COOKIE['twitbook_twitter_access_token_secret'];
	$_SESSION['oauth_state']=$state=$_COOKIE['twitbook_twitter_state'];
}*/
function makeClickableLinks($text) { 

  $text = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)', 
    '<a href="\\1">\\1</a>', $text); 
  $text = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)', 
    '\\1<a href="http://\\2">\\2</a>', $text); 
  $text = eregi_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})', 
    '<a href="mailto:\\1">\\1</a>', $text);
	
	  // parse usernames
	$pattern = '/[@]+([A-Za-z0-9-_]+)/';
	$replacement = '<a href="http://twitter.com/$1">@$1</a>';
	$text = preg_replace($pattern, $replacement, $text);

	// parse hashtags
	$pattern = '/[#]+([A-Za-z0-9-_]+)/';
	$replacement = '<a href="http://search.twitter.com/search?q=#$1">#$1</a>';
	$text = preg_replace($pattern, $replacement, $text);
   
return $text; 

} 

?>