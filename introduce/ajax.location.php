<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/board/config/use_db.php";
switch($tname){
	case "map1":
		$location = "경북 구미시 도신로 162-32";
		break;
	case "map2":
		$location = "파주시 월롱면 덕은리 1248-2";
		break;
}

$str = get_naver_api($location);
$decode = json_decode($str,true);
?>
<xml>
    <loc_x><?php echo $decode["result"]["items"][0]["point"]["x"]; ?></loc_x>
    <loc_y><?php echo $decode["result"]["items"][0]["point"]["y"]; ?></loc_y>
</xml>