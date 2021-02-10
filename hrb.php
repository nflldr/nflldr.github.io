<?php
$id = $_GET[id];
$playurl = json_decode(file_get_contents("http://mobile.hrbtv.net/zsbc/channel_detail.php?appid=28&appkey=7qz9SlJSyvYz6h42h12ieisFHK5JgnFd&device_token=810cd8c9c0cb383f4f49bbdfbe4641e2&_member_id=&version=1.3.7&app_version=1.3.7&app_version=1.3.7&package_name=com.hoge.android.app.haerbin&system_version=7.1.2&phone_models=UGOOS-UM3&channel_id=".$id));
$playurl = $playurl[0]->m3u8;
header('Location:'.$playurl);
?>