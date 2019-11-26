<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

if (isset($_SESSION['Username']))
{
    header("location: home");
}

$getLang = trim(filter_var(htmlentities($_GET['lang']) , FILTER_SANITIZE_STRING));

if (!empty($getLang))
{
    $_SESSION['language'] = $getLang;
}

// ========================= config the languages ================================
error_reporting(E_NOTICE ^ E_ALL);

include "langs/set_lang.php";

?>

<html dir="<? echo lang('html_dir'); ?>">

<head>
  <title><? echo lang('welcome'); ?> | <?php echo lang('site_name'); ?></title>
  <meta charset="UTF-8">
  <meta name="description" content="Hashtag is a social network platform helps you meet new friends and stay connected with your family and with who you are interested anytime anywhere.">
  <meta name="keywords" content="homepage, main, login, social network, social media, Hashtag, meet, free platform">
  <meta name="author" content="Munaf Aqeel Mahdi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "includes/head_imports_main.php"; ?>
</head>

<body class="login_signup_body">

  <!--============[ Nav bar ]============-->
  <div class="login_signup_navbar">
    <a href="index" class="login_signup_navbarLinks"><?php echo lang('site_name'); ?></a>
    <a href="#" class="btn btn-primary">About</a>
  </div>
  <!--============[ main contains ]============-->
  <div class="login_signup_box">
  <h3 align="center"><? echo lang('welcome_to'); ?> <?php echo lang('site_name'); ?></h3>
  <p align="center" style="color: #999; margin-bottom: 25px;">A social network to procrastinate on anything you have in mind</p>

  <div align="center">
    <a href="login" class="login_signup_btn1"><? echo lang('login'); ?></a>
    <a href="signup" class="login_signup_btn2"><? echo lang('signup'); ?></a>
  </div>

  </div>
  <div style="background: #fff; border-radius: 3px; max-width: 800px; padding: 15px; margin:auto;margin-top: 15px;color: #7b7b7b;" align="center">
    <a href="?lang=french">Français</a> &bull; <a href="?lang=english">English</a> &bull; <a href="?lang=arabic">العربية</a>
  </div>

</body>
</html>
