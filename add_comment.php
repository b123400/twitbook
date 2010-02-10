<?php
$message=stripslashes($_REQUEST['message']);
if($_REQUEST['service']=='facebook'){
	require_once('lib/init.php');
	$result=facebook_client()->api_client->stream_addComment($_REQUEST['reply_to'], $message);
}else if($_REQUEST['service']=='twitter'){
	require_once('lib/twitter_init.php');
	$to = new TwitterOAuth($consumer_key, $consumer_secret, $_SESSION['oauth_access_token'], $_SESSION['oauth_access_token_secret']);
	$result = $to->OAuthRequest('http://twitter.com/statuses/update.json', array('status' => $message, 'in_reply_to_status_id' => $_REQUEST['reply_to']), 'POST');
}
echo $result;
?>