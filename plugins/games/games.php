<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($global['systemRootPath'])) {
    require_once '../../config/config.php';
};
include($global['systemRootPath'] . "config/connect.php");
include($global['systemRootPath'] . "includes/fetch_users_info.php");
include ($global['systemRootPath'] . "includes/time_function.php");
include_once $global['systemRootPath'] . "langs/set_lang.php";
if(!isset($_SESSION['Username'])){
    header("location: ../../index");
}

$msgId = trim(filter_var(htmlentities($_GET['id'])),FILTER_SANITIZE_NUMBER_INT);
?>
<html dir="<?php echo lang('html_dir'); ?>">
<head>
    <title>Jeux</title>
    <meta charset="UTF-8">
    <meta name="description" content="Hashtag is a social network platform helps you meet new friends and stay connected with your family and with who you are interested anytime anywhere.">
    <meta name="keywords" content="Notifications,social network,social media,Hashtag,meet,free platform">
    <meta name="author" content="Munaf Aqeel Mahdi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include $global['systemRootPath'] . "includes/head_imports_main.php";?>
</head>
<body>
<!--=============================[ NavBar ]========================================-->
<?php include $global['systemRootPath'] . "includes/navbar_main.php"; ?>
<!--=============================[ Div_Container ]========================================-->
<div class="main_container" align="center">
  <a href="breakout/index.php"> <img src="breakout.png" alt=""> </a>
</div>
<!--===============================[ End ]==========================================-->
<?php include $global['systemRootPath'] . "includes/endJScodes.php"; ?>
</body>
</html>
