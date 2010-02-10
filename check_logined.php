<?php
$array=array();
require_once('lib/init.php');
// require twitterOAuth lib
require_once('lib/twitter_init.php');
function deleteIfFound($name){
	if($_COOKIE[$name]){
		setcookie($name, '', time()-3600);
	}
}
try{
	$fb_user_id=facebook_client()->api_client->call_method('Users.getLoggedInUser',array());
} catch (FacebookRestClientException $e) {
	$fb_user_id=false;
	
}

/*
 * Switch based on where in the process you are
 *
 * 'default': Get a request token from twitter for new user
 * 'returned': The user has authorize the app on twitter
 */
switch ($state) {/*{{{*/
  default:
    /* Create TwitterOAuth object with app key/secret */
    $to = new TwitterOAuth($consumer_key, $consumer_secret);
    /* Request tokens from twitter */
    $tok = $to->getRequestToken();

    /* Save tokens for later */
    $_SESSION['oauth_request_token'] = $token = $tok['oauth_token'];
    $_SESSION['oauth_request_token_secret'] = $tok['oauth_token_secret'];
    $_SESSION['oauth_state'] = "start";
    
    $request_link = $to->getAuthorizeURL($token);
    /* Build link that gets user to twitter to authorize the app */
    $array['twitter']=array('logged'=>false,'link'=>$request_link);
    break;
  case 'returned':
    /* If the access tokens are already set skip to the API call */
    if ($_SESSION['oauth_access_token'] === NULL && $_SESSION['oauth_access_token_secret'] === NULL) {
      /* Create TwitterOAuth object with app key/secret and token key/secret from default phase */
      $to = new TwitterOAuth($consumer_key, $consumer_secret, $_SESSION['oauth_request_token'], $_SESSION['oauth_request_token_secret']);
      /* Request access tokens from twitter */
      $tok = $to->getAccessToken();

      /* Save the access tokens. Normally these would be saved in a database for future use. */
      $_SESSION['oauth_access_token'] = $tok['oauth_token'];
      $_SESSION['oauth_access_token_secret'] = $tok['oauth_token_secret'];
    }
    /* Random copy */
    $content = 'your account should now be registered with twitter. Check here:<br />';
    $content .= '<a href="https://twitter.com/account/connections">https://twitter.com/account/connections</a>';

    /* Create TwitterOAuth with app key/secret and user access key/secret */
    $to = new TwitterOAuth($consumer_key, $consumer_secret, $_SESSION['oauth_access_token'], $_SESSION['oauth_access_token_secret']);
    /* Run request on twitter API as user. */
    $content = $to->OAuthRequest('https://twitter.com/account/verify_credentials.xml', array(), 'GET');
    $auth_error=strrpos($content,"Could not authenticate you");
    $array['twitter']=array('logged'=>!$auth_error);
    if($auth_error){
	    session_destroy();
  		session_start();
  		
  		$to = new TwitterOAuth($consumer_key, $consumer_secret);
	    /* Request tokens from twitter */
	    $tok = $to->getRequestToken();
	
	    /* Save tokens for later */
	    $_SESSION['oauth_request_token'] = $token = $tok['oauth_token'];
	    $_SESSION['oauth_request_token_secret'] = $tok['oauth_token_secret'];
	    $_SESSION['oauth_state'] = "start"; 

	    $array['twitter']['link']=$to->getAuthorizeURL($token);
  	}
   
    break;
}
$array['facebook']=array('logged'=>($fb_user_id?true:false));
if($fb_user_id)$array['facebook']['user_id']=$fb_user_id;

echo json_encode($array);
?>