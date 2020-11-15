<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($global['systemRootPath'])) {
    require_once '../../config/config.php';
};
include($global['systemRootPath'] . "config/connect.php");
include($global['systemRootPath'] . "includes/fetch_users_info.php");
include($global['systemRootPath'] . "includes/time_function.php");
include($global['systemRootPath'] . "includes/country_name_function.php");
include($global['systemRootPath'] . "includes/num_k_m_count.php");
if(!isset($_SESSION['Username'])){
    header("location: ../../index");
}

?>

<html dir="<?php echo lang('html_dir'); ?>">
<head>
    <title>Create new note | Hashtag</title>
    <meta charset="UTF-8">
    <meta name="description" content="Hashtag is a social network platform helps you meet new friends and stay connected with your family and with who you are interested anytime anywhere.">
    <meta name="keywords" content="social network,social media,Hashtag,meet,free platform">
    <meta name="author" content="Munaf Aqeel Mahdi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../../includes/endJScodes.php"; ?>
    <?php include "../../includes/head_imports_main.php";?>
    <style type="text/css">
        .noteContent{
            min-height: 196px;
            overflow-y: hidden;
            resize: none;
        }
    </style>
</head>
    <body onload="hide_notify()">
<!--=============================[ NavBar ]========================================-->
<?php include "../../includes/navbar_main.php"; ?>
<!--=============================[ Container ]=====================================-->
        <div align="center" style="margin-top: 65px;">
            <div class="white_div" style="text-align: <?php echo lang('textAlign'); ?>;">
            <h3 style="margin-top: 0;margin-bottom: 0;">Note list</h3>

            </div>
        </div>
<!--=============================[ Footer ]========================================-->
<?php include("../../includes/footer.php"); ?>

    </body>
</html>
