<?php
require_once('lib/twitter_init.php');
require_once('lib/init.php');
if($_REQUEST['message']!=""&&isset($_REQUEST['message'])){
	$request=stripslashes($_REQUEST['message']);
	if($_REQUEST['service']=='both'||$_REQUEST['service']=='twitter'){
		$to = new TwitterOAuth($consumer_key, $consumer_secret, $_SESSION['oauth_access_token'], $_SESSION['oauth_access_token_secret']);
		$content = $to->OAuthRequest('http://twitter.com/statuses/update.json', array('status'=>$request), 'POST');
	}
	if($_REQUEST['service']=='both'||$_REQUEST['service']=='facebook'){
		$facebook_content=facebook_client()->api_client->stream_publish($request);
	}
	echo json_encode(array('twitter'=>$content, 'facebook'=>$facebook_content));
}
?>