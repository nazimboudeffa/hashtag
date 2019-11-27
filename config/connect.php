<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hashtag";

try
{
  $con = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}
// ========================= config the languages ================================
error_reporting(E_NOTICE ^ E_ALL);

if (!isset($config['SystemRootPath'])) {
    include "../config/config.php";
}
include $config['SystemRootPath']."langs/set_lang.php";

// ================================ user verified badge style
$verifyUser = "<span style='color: #03A9F4;' data-toggle='tooltip' data-placement='top' title='".lang('verified_page')."' class='fa fa-check-circle verifyUser'></span>";
// ================================ check user if exist or not (for removed account).
$usrSessID = $_SESSION['id'];
$usrRemovedAcc = $con->prepare("SELECT id FROM users WHERE id=:usrSessID");
$usrRemovedAcc->bindParam(':usrSessID',$usrSessID,PDO::PARAM_INT);
$usrRemovedAcc->execute();
$$usrRemovedAccCount = $usrRemovedAcc->rowCount();
if (isset($usrSessID)) {
	if($$usrRemovedAccCount < 1){
		session_destroy();
	}
}
?>
