<?php
require_once('lib/twitter_init.php');
$to = new TwitterOAuth($consumer_key, $consumer_secret, $_SESSION['oauth_access_token'], $_SESSION['oauth_access_token_secret']);
$dataToSend=array('count'=>40);
if(isset($_REQUEST['newest_id'])&&$_REQUEST['newest_id']!=""){
	$dataToSend['since_id']=$_REQUEST['newest_id'];
	$dataToSend['count']=200;
}
$content = $to->OAuthRequest('http://api.twitter.com/1/statuses/home_timeline.json', $dataToSend, 'GET');
$results=json_decode($content,true);
$results=array_slice($results, 0,30);
$posts=array();
$i=0;
foreach($results as $result){
	if($result['id']){
		$posts[$i]=array();
		$posts[$i]['id']=$result['id'];
		$posts[$i]['author']=$result['user']['screen_name'];
		$posts[$i]['author_name']=$result['user']['name'];
		$posts[$i]['pic']=$result['user']['profile_image_url'];
		$posts[$i]['message']=makeClickableLinks($result['text']);
		$posts[$i]['time']=strtotime($result['created_at']);
		$posts[$i]['client']=$result['source'];
		$posts[$i]['type']="twitter";
		if($result['in_reply_to_user_id']!="")$posts[$i]['target']=$result['in_reply_to_user_id'];
		if($result['in_reply_to_screen_name']!="")$posts[$i]['target_name']=$result['in_reply_to_screen_name'];
		if($result['in_reply_to_status_id']!="")$posts[$i]['target_id']=$result['in_reply_to_status_id'];
	}
	$i++;
}
/*
id            - the status id
author        - the author id                            (int)
author_name   - the name of author
pic           -the url of the picture of the author
message       - the message
time          - the unix time stamp of the message PUBLISHED
client        -the client
target        - the user_id of message's target          (int)          (optional)
target_name   -the username of message's target                         (optional)
target_id     -the id of the reply target                               (optional)
//*/
echo json_encode($posts);
?>