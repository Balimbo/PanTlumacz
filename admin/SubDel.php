<?php
function Del(){
    $servername = "localhost";
    $username 	= "root";
    $password 	= "";

    $conn 		= new mysqli($servername, $username, $password);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->query("USE Reviews");
    $id 	= intval($_GET['del']);
    $sql 	= "DELETE FROM `comment` WHERE `id`=$id";

    $conn->query($sql);
    $conn->close();
}

function Submit(){
    $servername = "localhost";
    $username 	= "root";
    $password 	= "";

    $conn 		= new mysqli($servername, $username, $password);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->query("USE Reviews");

	$id 	= intval($_GET['sub']);
	$sql 	= "UPDATE `comment` SET isCheked=TRUE WHERE `id`=$id";

    $conn->query($sql);
    $conn->close();
}

if (isset($_GET['del'])){
    Del();
}

if (isset($_GET['sub'])){
	Submit();
}
