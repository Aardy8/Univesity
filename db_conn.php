<?php

$sname= "localhost";
$unmae= "id18831268_user";
$password = "|oqSWdF9\sx=Oo#_";
//|oqSWdF9\sx=Oo#_
$db_name = "id18831268_university";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}