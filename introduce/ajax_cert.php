<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/board/config/use_db.php";
$mode = $site_prefix."board_cert";
$sql = " select * from ".$mode." where BoardIdx = '".$idx."' ";
$row = sql_fetch($sql);
$row["files"] = get_file($mode, $idx);

echo $row["files"][0]["path"]."/".$row["files"][0]["file_source"];
?>