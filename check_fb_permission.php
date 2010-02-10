<?php
require_once('lib/init.php');
if(isset($_REQUEST['permission'])&&$_REQUEST['permission']!=""){
	$permission=$_REQUEST['permission'];
}else{
	$permission='read_stream';
}
$gained=facebook_client()->api_client->call_method('Users.hasAppPermission', array('ext_perm' => $permission));
echo ($gained==true?true:false);
?>