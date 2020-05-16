<?php
// sub - submit
// сhanges the isChecked label to true, after which this entry may appear on the page

// del - delete 
// deletes a database entry

function Del(){
    require_once (realpath('../settings.php'));
    
    $id 	= intval($_GET['del']);
    $sql 	= "DELETE FROM `comment` WHERE `id` = '$id'";

    $conn->query($sql);
    $conn->close();
}

function Submit(){
    require_once (realpath('../settings.php'));

	$id 	= intval($_GET['sub']);
	$sql 	= "UPDATE `comment` SET `isCheked` = TRUE WHERE `id` = '$id'";

    $conn->query($sql);
    $conn->close();
}

// sub and del functions are called after the corresponding get parameter appears

if (isset($_GET['del'])){
    Del();
}

if (isset($_GET['sub'])){
	Submit();
}
