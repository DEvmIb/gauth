<?php


if ($_GET["method"] == "get") {
	$pass=md5($_GET['pass']);
	echo file_get_contents('./data.'.$pass.'.txt');
}

if ($_POST["method"] == "put") {
	$pass=md5($_POST['pass']);
	file_put_contents('./data.'.$pass.'.'.time().'.txt', file_get_contents('./data.'.$pass.'.txt'));
	file_put_contents('./data.'.$pass.'.txt', $_POST["data"]);
}


?>