<?php
require_once('lib/init.php');
$start_time='';
if(isset($_REQUEST['newest_id'])&&$_REQUEST['newest_id']!=""){
	$start_time=$_REQUEST['newest_id'];
}
$content=facebook_client()->api_client->stream_get('', '', $start_time, '', '', '', '');
if($content['profiles']==null){
	$content['profiles']=array();
}
if($content['posts']==null){
	$content['posts']=array();
}

$profiles=array();
$posts=array();
foreach($content['profiles'] as $profile){
	$profiles[$profile['id']]=$profile;
}
$i=0;
foreach($content['posts'] as $post){
	$posts[$i]=array();
	$posts[$i]['id']=$post['post_id'];
	$posts[$i]['author']=$post['actor_id'];
	$posts[$i]['author_name']=$profiles[$post['actor_id']]['name'];
	$posts[$i]['pic']=$profiles[$post['actor_id']]['pic_square'];
	if($post['target_id']!=""){
		$posts[$i]['target']=$post['target_id'];
		$posts[$i]['target_name']=$profiles[$post['target_id']]['name'];
	}
	$posts[$i]['message']=$post['message'];
	$posts[$i]['time']=$post['created_time'];
	if($post['attachment']){
		if($post['attachment']['media']){
			$posts[$i]['image']=array();
			foreach($post['attachment']['media'] as $pic){
				$posts[$i]['image'][]='<a href="'.$pic['href'].'"><img src="'.$pic['src'].'" /></a>';
			}
		}
		if($post['attachment']['description']!=""){
			$posts[$i]['description']=$post['attachment']['description'];
		}
		if($post['attachment']['name']!=""){
			if($post['attachment']['href']==""){
				$posts[$i]['link']=$post['attachment']['name'];
			}else{
				$posts[$i]['link']='<a href="'.$post['attachment']['href'].'" target="_blank">'.$post['attachment']['name'].'</a>';
			}
		}
		if($post['attachment']['caption']!=""){
			$posts[$i]['caption']=$post['attachment']['caption'];
		}
		if($post['comments']['comment_list']!=""){
			$posts[$i]['comments']=array();
			foreach($post['comments']['comment_list'] as $comment){
				$posts[$i]['comments'][]=array('id'=>$comment['fromid'],'name'=>$profiles[$comment['fromid']]['name'],'pic'=>$profiles[$comment['fromid']]['pic_square'], 'text'=>$comment['text']);
			}
		}
	}
	if($post['attribution']!="")$posts[$i]['client']=$post['attribution'];
	$posts[$i]['type']="facebook";
	$i++;
}

/*
id            - the status id
author        - the author id                            (int)
author_name   - the name of author
pic           -the url of the picture of the author
message       - the message
time          - the unix time stamp of the message PUBLISHED
target        - the user_id of message's target          (int)          (optional)
target_name   -the username of message's target                         (optional)
image         - image(s) of the message                  (numeric array)(optional)
description   - detail text of the message                              (optional)
client        -the client                                               (optional)
link          -the link inside status                                   (optional)
caption       -caption (source...) inside the status                    (optional)
comments      -comments of status                        (array)        (optional)
        [i]
           ['id']     the id of the comment's author
           ['name']   the name of the comment's author
           ['text']   the text of comment          
           ['pic']    the pic of the comment;s author 
//*/
echo json_encode($posts);
?>