<?php
switch ($_SESSION['language']) {
case 'french':
	include_once $global['systemRootPath'] . "langs/french.php";
	break;
case 'english':
	include_once $global['systemRootPath'] . "langs/english.php";
	break;
case 'arabic':
	include_once $global['systemRootPath'] . "langs/arabic.php";
	break;
default:
	$_SESSION['language'] = "french";
	include_once $global['systemRootPath'] . "langs/french.php";
	break;
}
?>
