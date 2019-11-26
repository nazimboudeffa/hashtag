<?php
switch ($_SESSION['language']) {
case 'french':
	include_once "french.php";
break;
case 'english':
	include_once "english.php";
break;
case 'arabic':
	include_once "arabic.php";
break;
default:
	$_SESSION['language'] = "English";
	include_once "english.php";
break;
}
?>
