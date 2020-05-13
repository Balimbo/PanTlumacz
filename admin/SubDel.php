<?php
function Del(){
    require_once (realpath('../settings.php'));

    $conn->query("USE `bearwh_PanTlumatcz`");
    
    $id 	= intval($_GET['del']);
    $sql 	= "DELETE FROM `comment` WHERE `id` = '$id'";

    $conn->query($sql);
    $conn->close();
}

function Submit(){
    require_once (realpath('../settings.php'));

    $conn->query("USE `bearwh_PanTlumatcz`");

	$id 	= intval($_GET['sub']);
	$sql 	= "UPDATE `comment` SET `isCheked` = TRUE WHERE `id` = '$id'";

    $conn->query($sql);
    $conn->close();
}

if (isset($_GET['del'])){
    Del();
}

if (isset($_GET['sub'])){
	Submit();
}
