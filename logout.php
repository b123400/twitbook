<?php
require_once('lib/twitter_init.php');
require_once('lib/init.php');
$thing='';
function deleteIfFound($name){
	if($_COOKIE[$name]){
		setcookie($name, '', time()-3600);
	}
}
deleteIfFound('twitbook_twitter_access_token_secret');
deleteIfFound('twitbook_twitter_access_token');
deleteIfFound('twitbook_twitter_state');
deleteIfFound('twitbook_facebook_user_id');
deleteIfFound('twitbook_facebook_session_key');
session_destroy();
session_start();
header( 'Location: /twitbook' ) ;
?>
<script>
this.location.href='/twitbook';
</script>