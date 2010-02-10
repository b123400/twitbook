<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="static/jquery.js"></script>
<meta name = "viewport" content = "width = 750">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>twitbook</title>
<link href="static/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#wrapper {
	position:absolute;
	left:50%;
	top:30%;
	width:450px;
	height:300px;
	z-index:2;
	margin-left:-225px;
	background-image: url(static/index_logo.png);
	background-repeat: no-repeat;
	background-position: center top;
	text-decoration: none;
}
#authbox {
	position:absolute;
	left:0;
	top:100px;
	width:100%;
	height:200px;
	z-index:3;
	background-image: url(static/auth_bg.png);
	text-decoration: none;
}
#twitter_auth {
	position:absolute;
	left:0;
	width:50%;
	height:100%;
	z-index:3;
	color: #FFFFFF;
	font-family: Tahoma;
	font-size: 12px;
	vertical-align: middle;
	text-align: center;
	top: 0;
	cursor: pointer;
	text-decoration: none;
	
		
	background-repeat: no-repeat;
	background-position: right bottom;
}
#fb_auth {
	position:absolute;
	left:50%;
	top:0;
	width:50%;
	height:100%;
	z-index:3;
	font-family: Tahoma;
	font-size: 12px;
	vertical-align: middle;
	text-align: center;
	top: 0;
	background-repeat: no-repeat;
	background-position: right bottom;
}
#main_wrapper {
	position:absolute;
	left:50%;
	top:50%;
	margin-left:-375px;
	width:750px;
	height:49px;
	z-index:3;
	display:none;
}
#updateWrapper {
	position:absolute;
	left:125px;
	top:20px;
	width:500px;
	height:150px;
	z-index:4;
}
#updateSpeechTop {
	position:absolute;
	left:0px;
	top:0px;
	width:100%;
	height:29px;
	z-index:4;
	background-image:url(static/speech_top.png);
}
#updateSpeechMiddle {
	position:absolute;
	left:0px;
	top:29px;
	bottom:47px;
	width:100%;
	z-index:3;
	background-color:#FFFFFF;
}
#updateSpeechBottom {
	position:absolute;
	left:0px;
	bottom:0px;
	width:100%;
	height:47px;
	z-index:4;
	background-image:url(static/speech_bottom.png);
}
#updatePublishButton{
	position:absolute;
	left:0px;
	bottom:0px;
	height:36px;
	width:100%;
	background-image:url(static/publish.png);
	background-position:left top;
	background-repeat:no-repeat;
}
#updateMain{
	position:absolute;
	top:3px;
	left:11px;
	width:478px;
	bottom:30px;
	font:Tahoma;
	font-size:16px;
	z-index:10;
	color:#999999;
	vertical-align:middle;
	overflow:hidden;
}
#menuWrapper{
	position:absolute;
	left:3px;
	top:0px;
	height:47px;
	width:472px;
	background-image:url(static/menu.jpg);
	background-repeat:no-repeat;
	background-position:left top;
}
#menuTwitter{
	position:absolute;
	left:0px;
	top:0px;
	height:47px;
	width:148px;
}
#menuFacebook{
	position:absolute;
	left:324px;
	top:0px;
	height:47px;
	width:148px;
}
#menuBoth{
	position:absolute;
	left:148px;
	top:0px;
	height:25px;
	width:176px;
}
#menuStatus{
	position:absolute;
	left:149px;
	top:25px;
	height:22px;
	width:176px;
}
#hidden_for_update{
	display:none;
}
.pointer{
	cursor:pointer;
	color:#0033CC;
	text-decoration:underline;
}
#load_new_status{
	position: absolute;
	top:105px;
	left:63px;
	width: 624px;
	height:30px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border: 1px;
	border-color: #999999;
	background-color: #FFFFFF;
}
#status_wrapper{
	position:absolute;
	width:100%;
	/*background-color:#FF0000;*/
}
.status{
	/*background-color:#00CC66;*/
	position:relative;
	min-height:50px;
	margin-top:5px;
}
.status_bg_top{
	background-image:url(static/status_top.png);
	background-repeat:no-repeat;
	background-position:left top;
	width:624px;
	top:0px;
	left:63px;
	height:10px;
	position:absolute;
	z-index:1;
}
.status_bg_bottom{
	background-image:url(static/status_bottom.png);
	background-repeat:no-repeat;
	background-position:left top;
	width:624px;
	bottom:0px;
	left:63px;
	height:10px;
	position:absolute;
	z-index:1;
}
.status_bg_middle{
	background-color:#FFFFFF;
	width:624px;
	top:10px;
	left:63px;
	bottom:10px;
	position:absolute;
	z-index:1;
}
.status_text_wrapper{
	/*background-color:#FFFFFF;*/
	padding:5px;
	padding-bottom: 14px;
	width:594px;
	margin-left:63px;
	min-height:28px;
	position:relative;
	z-index:10;
}
a .status_text_wrapper{
	text-decoration:none;
}
.status_functions{
	position:absolute;
	width:20px;
	left:668px;
	top:5px;
	z-index:9;
}
.twitter_status_pic{
	position:absolute;
	left:0px;
	top:0px;
	width:63px;
	/*background-color:#993366;*/
	background-image:url(static/twitter_speak.png);
	background-repeat:no-repeat;
	background-position:center right;
}
.status_pic_img{
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	width: 48px;
	height: 48px;
}
.facebook_status_pic{
	position:absolute;
	right:0px;
	top:0px;
	width:63px;
	background-image:url(static/fb_speak.png);
	background-repeat:no-repeat;
	background-position:center left;
	text-align:right;
}
.statusFooter{
	font-size:12px;
	text-align:right;
	color:#999999;
	position: absolute;
	bottom: 0px;
	right: 67px;
	z-index: 11;
}
.facebook_comment{
	margin-top:3px;
	background-color:rgb(236, 239, 245);
	margin-left:20px;
}
.a2{
	color: rgb(128, 128, 128);
	font-size:12px;
}
a{
	text-decoration:none;
}
#littleMenu{
	text-align: center;
	
}
#reply{
	width: 336px;
	height:114px;
	background-image: url(static/reply_bg.png);
	display: none;
	position: absolute;
	opacity: 0;
	z-index: 96;
}
#reply_field{
	position: absolute;
	width: 287px;
	height: 51px;
	top: 17px;
	left: 15px;
	background-color: #FFFFFF;
}
#reply_button{
	position: absolute;
	top: 70px;
	left: 14px;
	height: 29px;
	width:202px;
	cursor: pointer;
}
#reply_close{
	position: absolute;
	top: 70px;
	left: 215px;
	width: 90px;
	height: 29px;
	cursor: pointer;
}
-->
</style>
</head>

<body>
<div id="reply"><textarea id="reply_field"></textarea><div id="reply_button" onclick="send_reply()"></div><div id="reply_close" onclick="close_reply()"></div><input type="hidden" id="in_reply_to_hidden" value=""/><input type="hidden" id="reply_service_hidden" value=""/></div>
<div id="main_wrapper">
  <div id="littleMenu" align="center">
<img src="static/door_out.png" class="pointer" onclick="logout();//document.location.href='logout';" alt="Logout"/>
  </div>
  <div id="updateWrapper">  
  	<div id="hidden_for_update">
    </div>
    <div id="updateMain" align="center"></div>
    <div id="updateSpeechTop"></div>
    <div id="updateSpeechMiddle"></div>
    <div id="updateSpeechBottom" onclick="toogleUpdateSpeech()" class="pointer"></div>
  </div>
  <div id="load_new_status" class="pointer" align="center" onclick="load_new_status()"><img src="static/arrow_refresh.png" class="pointer" id="refresh_icon" alt="Refresh" style="position:absolute;top:7px;left:304px;"/></div>
  <div id="status_wrapper">
  	<div class="status">
    	<div class="status_text_wrapper" align="center">
        	Loading now...
        </div>
    </div>
  </div>
</div>

<script
src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"
type="text/javascript"></script>
<script>
//setup
twitter_auth_link=""

var auto_refresh;
twitter_loggedin=true;
facebook_loggedin=true;
facebook_read_permission=false;
var facebook_write_permission=null;
$(document).ready(function() {
	check_login()
})
function check_login(justlogedin){
	if(justlogedin=='yes'){
		$("#fb_login").html("Loading...");
	}
	$.get("check_logined", {}, function(data){
			twitter_loggedin=data.twitter.logged;
			facebook_loggedin=data.facebook.logged;
			if(!twitter_loggedin){
				twitter_auth_link=data.twitter.link;
				$("#twitter_auth_text").html("Authorize your twitter account &gt;");
			}else{
				twitter_done()
			}
			if(!facebook_loggedin){
				if(false&&FB.Connect.get_status().result==1){
					facebook_done()
				}else{
					$("#fb_login").html("<fb:login-button length=\"long\" onlogin=\"fb_login();\"></fb:login-button>");
				}
			}else{
				facebook_done('yes');
			}
			FB.XFBML.Host.parseDomTree();
		},"json");
}
function auth_twitter(){
	if(!twitter_loggedin)window.open(twitter_auth_link,'twitter_auth_popup');
}
function twitter_done(){
	$("#twitter_auth_text").html("You've logged in twitter");
	twitter_loggedin=true;
	$("#twitter_auth").css("background-image", "url(static/tick.png)");
	check_login_done();
}
function ask_read_premission(){
	FB.Connect.showPermissionDialog("read_stream", function(x){
																	if(x!="read_stream"){
																		alert("You are a careful man!:)\nBut twitbook needs this Special Permissions in order to work!\nCan you allow it?");
																		ask_read_premission();
																	}else{
																		facebook_permission_done();
																	}
																});
}
function ask_write_permission(doNext){
	if(facebook_write_permission==true)return;
	FB.Connect.showPermissionDialog("publish_stream", function(x){
																	if(x!="publish_stream"){
																		alert("You are a careful man!:)\nBut twitbook needs this Special Permissions in order to work!\nOr you only publish to twitter?");
																	}else{
																		facebook_write_permission=true;
																		doNext();
																	}
																});
}
function check_facebook_write_permission(doNext){
	$.get("check_fb_permission?permission=publish_stream", {}, function(data){
		if(data!=1){
			facebook_write_permission=false;
		}else{
			facebook_write_permission=true;
		}
		if(doNext!=null){
			doNext();
		}
},"text");
}
function facebook_done(ispermission){
	if(ispermission!='yes'){
		check_login('yes')
		return;
	}
	facebook_loggedin=true;
	document.getElementById("fb_login").innerHTML = "Checking permission now..."
	$.get("check_fb_permission", {}, function(data){
		if(data!=1){
			ask_read_premission();
		}else{
			facebook_permission_done();
		}
},"text");
}
function facebook_permission_done(){
	document.getElementById("fb_login").innerHTML = 'Facebook account authorized. <BR />Hello, <fb:name uid="loggedinuser" useyou=false linked=false></fb:name>';
	$("#fb_auth").css("background-image", "url(static/tick.png)");
	facebook_read_permission=true;
	FB.XFBML.Host.parseDomTree();
	check_login_done();
}
function check_login_done(){
	if(twitter_loggedin&&facebook_loggedin&&facebook_read_permission){
		log_me_in();
	}
}
function log_me_in(){
	$("#authbox").fadeOut("fast", function(){$("#wrapper").animate({ 
        top: "20px"
      }, 1200)});
	$("#main_wrapper").animate({top: "120px"}, 1000).fadeIn("fast")
	hideUpdateSpeech();
	load_status("both");
	check_facebook_write_permission();
	auto_refresh = setInterval(load_new_status, 30000);
}
function toogleUpdateSpeech(){
	if(updateSpeechopened){
		hideUpdateSpeech();
	}else{
		showUpdateSpeech();
	}
}
updateSpeechopened=true;
function hideUpdateSpeech(text){
	if(text==null)text='<div id="menuWrapper" class="pointer"><div id="menuTwitter" onclick="showOnly(\'twitter\')"></div><div id="menuFacebook" onclick="showOnly(\'facebook\')"></div><div id="menuBoth" onclick="showOnly(\'both\')"></div><div id="menuStatus" onclick="showUpdateSpeech()"></div></div>';
	$("#updateMain").html(text);
	$("#updateWrapper").animate({ 
        height: "80px"
      });
      $("#load_new_status").fadeIn("fast");
	  $("#status_wrapper").animate({top:"135px" })
	  updateSpeechopened=false;
}
function showUpdateSpeech(){
	if(updateSpeechopened)return;
	$("#updateMain").html('<textarea name="update_input" id="update_input" style="position:absolute;top:4px;height:70px;width:476px;left:0px;"></textarea>        <div id="updatePublishButton">        	<div style="position:absolute;left:0px;top:0px;height:36px;width:159px;" onclick="updateMyStatus(\'twitter\')"></div>        	<div style="position:absolute;left:159px;top:0px;height:36px;width:159px;" onclick="updateMyStatus(\'both\')"></div>        	<div style="position:absolute;left:318px;top:0px;height:36px;width:159px;" onclick="updateMyStatus(\'facebook\')"></div>        </div>');
	$("#updateWrapper").animate({height:"150px"});
	$("#load_new_status").fadeOut("fast");
	$("#status_wrapper").animate({top: "170px"})
	$("#update_input").focus();
	updateSpeechopened=true;
}
var nowView="both";
function showOnly(service){
	if(service==null)service="both"
	nowView=service
	if(service=="twitter"){
		$("#facebook_bg").animate({left: "80%"})
		$("#wrapper").animate({left:"80%"});
		if(twitter_stored_statuses.length>0){
			parseAndShow(twitter_stored_statuses);
		}else{
			load_status("twitter",'new');
		}
	}else if(service=="facebook"){
		$("#facebook_bg").animate({left: "20%"})
		$("#wrapper").animate({left:"20%"});
		if(facebook_stored_statuses.length>0){
			parseAndShow(facebook_stored_statuses);
		}else{
			load_status("facebook",'new');
		}
	}else{
		$("#facebook_bg").animate({left: "50%"})
		$("#wrapper").animate({left:"50%"});
		if(mix_stored_statuses.length>0&&mix_update){
			parseAndShow(mix_stored_statuses);
		}else{
			load_status("both",'new');
		}
	}
}
function load_new_status(){
	load_status(nowView,'new');
}

var nowLoadTarget=null;
var twitterLoaded=false;
var facebookLoaded=false;
var twitter_stored_statuses=new Array();
var facebook_stored_statuses=new Array();
var mix_stored_statuses=new Array();
var mix_update=false;
var loadingNewOrOld;
var newest_twitter;
var newest_facebook;
var visibleInBoth=30;
function load_status(service,newOrOld){
	if(newOrOld=='new'){
		$("#refresh_icon").attr("src","static/ajax.gif");
	}
	loadingNewOrOld=newOrOld;
	if(service==null)service="both";
	nowLoadTarget=service;
	nowView=service;
	if(service=="both"||service=="twitter"){
		get_twitter_status(newOrOld);
	}
	if(service=="both"||service=="facebook"){
		get_facebook_status(newOrOld);
	}
}
function get_twitter_status(newOrOld){
	twitterLoaded=false;
	var dataToSend;
	if(newOrOld=='new'&&newest_twitter){
		dataToSend={newest_id:newest_twitter};
	}else{
		dataToSend={};
	}
	$.get("twitter_status", dataToSend, function(data){
		if(data.length>0&&newOrOld!='old'){
				newest_twitter=data[0].id;
		}
		if(newOrOld=='new'){
			visibleInBoth+=data.length
		}
		if(newOrOld=='new'){
			twitter_stored_statuses=data.concat(twitter_stored_statuses)
		}else{
			twitter_stored_statuses=data;
		}
		twitterLoaded=true;
		mix_update=false;
		if(nowLoadTarget=="twitter"){
			parseAndShow(twitter_stored_statuses);
		}else if(nowLoadTarget=="both"){
			if(facebookLoaded){
				parseAndShow(mixStatus(twitter_stored_statuses, facebook_stored_statuses));
			}
		}
	},"json");
}
function get_facebook_status(newOrOld){
	facebookLoaded=false;
	var dataToSend;
	if(newOrOld=='new'&&newest_facebook){
		dataToSend={newest_id:newest_facebook};
	}else{
		dataToSend={};
	}
	$.get("facebook_stream", dataToSend, function(data){
		if(data.length>0&&newOrOld!='old'){
			newest_facebook=data[0].time+1;
		}
		if(newOrOld=='new'){
			visibleInBoth+=data.length
		}
		if(newOrOld=='new'){
			facebook_stored_statuses=data.concat(facebook_stored_statuses)
		}else{
			facebook_stored_statuses=data;
		}
		facebookLoaded=true;
		mix_update=false;
		if(nowLoadTarget=="facebook"){
			parseAndShow(facebook_stored_statuses);
		}else if(nowLoadTarget=="both"){
			if(twitterLoaded){
				parseAndShow(mixStatus(facebook_stored_statuses, twitter_stored_statuses));
			}
		}
	},"json");
}
function mixStatus(data1, data2){
	mix_update=true;
	joined=data1.concat(data2);
	joined.sort(sortfunction);
	mix_stored_statuses=joined.slice(0,visibleInBoth)
	return mix_stored_statuses;
}
function sortfunction(a, b){
	if(a.time>b.time){
		return -1
	}
	if(b.time>a.time){
		return 1;
	}
	return 0
}
function parseAndShow(data){
	clean();
	$("#refresh_icon").attr("src","static/arrow_refresh.png");
	thing=""
	for(i=0;i<data.length;i++){
			
			thing+='<div class="status"><div class="status_bg_top"></div><div class="status_bg_middle"></div><div class="status_bg_bottom"></div><div class="status_text_wrapper"><a href="';
			if(data[i].type=="facebook"){
				
				thing+='http://www.facebook.com/profile.php?id=';
			}
			if(data[i].type=="twitter"){
				
				thing+='http:\/\/twitter.com\/'
			}
			
			thing+=data[i].author+'">';
			
			thing+=data[i].author_name+'</a>'
			if(data[i].type=="facebook"){
				if(data[i].hasOwnProperty('target')){
					thing +=' &gt; <a href="http://www.facebook.com/profile.php?id='+data[i].target+'" target="_blank">'+data[i].target_name+'</a>';
				}
			}
			thing+=': '+data[i].message;
			if(data[i].type=="facebook"){
				thing+='<div style="/*float:left;*/" class="a2">';
				if(data[i].hasOwnProperty("image")){
					for(j=0;j<data[i].image.length;j++){
						thing+='<div style="float:left;display: block;" class="a3">';
						if(data[i].image[j]!="")thing+=data[i].image[j];
						thing+='</div>';
					}
				}
				if(data[i].hasOwnProperty("link")){
					thing+='<b>'+data[i].link+'</b><BR />';
				}
				if(data[i].hasOwnProperty("caption")){
					thing+=''+data[i].caption+'<BR />';
				}
				if(data[i].hasOwnProperty("description")){
					thing+=data[i].description;
				}
				thing+='<div style="clear: both;"></div>'
				if(data[i].hasOwnProperty("comments")){
					for(j=0;j<data[i].comments.length;j++){
						thing+='<div class="facebook_comment"><div style="float:left;"><img src="'+data[i].comments[j].pic+'" /></div><a href=http://www.facebook.com/profile.php?id="'+data[i].comments[j].id+'" target="_blank">'+data[i].comments[j].name+'</a>: '+data[i].comments[j].text+'<div style="clear: both;"></div></div>'
					}
				}
				thing+='</div>';
			}
			thing+='</div>'
			thing+='<div class="statusFooter">'+get_elapsedtime(data[i].time)
			if(data[i].hasOwnProperty("client"))thing+=' from '+data[i].client
			if(data[i].type=="twitter"){
				if(data[i].hasOwnProperty('target')){
						thing +=' <a href="http://twitter.com/'+data[i].target_name+'/statuses/'+data[i].target_id+'">in reply to '+data[i].target_name+'</a>';
				}
			}
			thing+='</div>';
			thing+='<div class="'+data[i].type+'_status_pic"><img src="'+data[i].pic+'" class="status_pic_img" />  </div><div class="status_functions"><div id="menu_'+i+'" class="pointer" onclick="replyTo(\''+i+'\',\''+data[i].id+'\','+((data[i].type=="twitter")?"'"+data[i].author+"'":null)+',\''+data[i].type+'\')"><img src="static/icon_reply.gif" /></div></div></div>';
	}
	
		$("#status_wrapper").html(thing)
}
function clean(){
	$("#status_wrapper").html("");
}
function updateMyStatus(service){
	if(service==null)service='both';
	if(service=='both'||service=='facebook'){
		if(facebook_write_permission==null){
			check_facebook_write_permission(function(){updateMyStatus(service)});
			return;
		}else if(!facebook_write_permission){
			ask_write_permission(function(){updateMyStatus(service)});
			return;
		}
	}
	if($("#update_input").val()!=""){
		$.post("update_status", { service: service,message:$("#update_input").val() },
		function(data){
			hideUpdateSpeech();
			load_new_status()
		}, "json");
		hideUpdateSpeech("Updating...");
	}
}
function replyTo(id,in_reply_to,name,service){
	var p = $("#menu_"+id);
	var position = p.offset();
	$("#reply_field").val(((name!=null)?"@"+name+" ":""))
	$("#reply").css("display","block");
	$("#reply").animate({ 
        top: position.top-57,
        left: position.left-336,
        opacity: 1,
      }, 500 ,"" ,function(){document.getElementById("reply_field").focus();setCaretToEnd(document.getElementById("reply_field"));});
	  $("#in_reply_to_hidden").val(in_reply_to);
	  $("#reply_service_hidden").val(service)
}
function send_reply(){
	if($("#reply_field").val()=="")return;
	service=$("#reply_service_hidden").val()
	if(service=='facebook'){
		if(facebook_write_permission==null){
			check_facebook_write_permission(function(){send_reply()});
			return;
		}else if(!facebook_write_permission){
			ask_write_permission(function(){send_reply()});
			return;
		}
	}
	$.post("add_comment", { service: service,message:$("#reply_field").val(), reply_to:$("#in_reply_to_hidden").val() },
	function(data){
		close_reply();
		$("#reply_field").removeAttr("disabled");
		load_new_status();		
	}, "text");
	$("#reply_field").attr("disabled", "disabled");
}
function setCaretToEnd(ctrl) {
	if(ctrl.setSelectionRange)	{
		ctrl.setSelectionRange(ctrl.value.length, ctrl.value.length);
	}else if (ctrl.createTextRange) {
		var range = ctrl.createTextRange();
		range.moveStart('character', ctrl.value.length);
		range.select();
	}
}
function close_reply(){
	$("#reply").animate({ 
        opacity: 0,
      }, 500 ,"" ,function(){$("#reply").css("display","none");});
	  $("#in_reply_to_hidden").val("");
	  $("#in_reply_to_hidden").val("");
	  $("#reply_service_hidden").val("")
}
function get_elapsedtime(time) {
    var gap = Math.round(new Date().getTime()/1000.0) - time;

    if (gap < 5) {
        return 'less than 5 seconds ago';
    } else if (gap < 10) {
        return 'less than 10 seconds ago';
    } else if (gap < 20) {
        return 'less than 20 seconds ago';
    } else if (gap < 40) {
        return 'half a minute ago';
    } else if (gap < 60) {
        return 'less than a minute ago';
    }

    gap = Math.round(gap / 60);
    if (gap < 60)  { 
        return gap+' minute'+(gap > 1 ? 's' : '')+' ago';
    }

    gap = Math.round(gap / 60);
    if (gap < 24)  { 
        return 'about '+gap+' hour'+(gap > 1 ? 's' : '')+' ago';
    }
	return new Date(time).toGMTString()
}
function logout(){
	FB.Connect.logoutAndRedirect('logout')
}
</script>

<div id="facebook_bg" class="both_view"></div>
<div id="wrapper">
  <div id="authbox">
    <div id="twitter_auth" onclick="auth_twitter()">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p id="twitter_auth_text">Loading...</p>
    </div>
    <div id="fb_auth">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div style="color:#FFFFFF;text-decoration:none;" id="fb_login">Loading...</div>
    </div>
  </div>
</div>
<script type="text/javascript">
FB.init("your facebook key", "xd_receiver.htm");

function fb_login(){
	
	facebook_done();
}

FB.init("your facebook key", "xd_receiver.htm");
</script>
</body>
</html>