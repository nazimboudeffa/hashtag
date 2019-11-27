<?php
session_start();
if (!isset($config['SystemRootPath'])) {
    include "../config/config.php";
}
include($config['SystemRootPath'] . "config/connect.php");
$s_id = $_SESSION['id'];
$plike = filter_var(htmlentities($_POST['pl']),FILTER_SANITIZE_NUMBER_INT);
$lid = "";
    $checklike_sql = "SELECT * FROM likes WHERE liker=:s_id AND post_id=:plike";
    $checklike = $con->prepare($checklike_sql);
    $checklike->bindParam(':s_id',$s_id,PDO::PARAM_INT);
    $checklike->bindParam(':plike',$plike,PDO::PARAM_INT);
    $checklike->execute();
    $checknum = $checklike->rowCount();
    if ($checknum > 0) {
    $unlike_sql = "DELETE FROM likes WHERE liker=:s_id AND post_id=:plike";
    $unlike = $con->prepare($unlike_sql);
    $unlike->bindParam(':s_id',$s_id,PDO::PARAM_INT);
    $unlike->bindParam(':plike',$plike,PDO::PARAM_INT);
    $unlike->execute();
    $likebtn =  "<span onclick=\"likeUnlike('$plike')\" style='color:#ff928a;font-size:30px' data-toggle='tooltip' data-placement='top' title='".lang('liked')."' id='plike'><span class=\"fa fa-heart-o\"></span></span>";

    // update likes number
    $likes_sql = "SELECT id FROM likes WHERE post_id=:plike";
    $likes = $con->prepare($likes_sql);
    $likes->bindParam(':plike',$plike,PDO::PARAM_INT);
    $likes->execute();
    $likes_num = $likes->rowCount();
    $makeChangeSql = "UPDATE posts SET p_likes=:likes_num WHERE post_id=:plike";
    $makeChange = $con->prepare($makeChangeSql);
    $makeChange->bindParam(':likes_num',$likes_num,PDO::PARAM_INT);
    $makeChange->bindParam(':plike',$plike,PDO::PARAM_INT);
    $makeChange->execute();
    if ($likes_num == 0) {
        $likenum = "<span class='fa fa-heart'></span> ".lang('no_likes');
    }elseif ($likes_num == 1){
        $likenum = "1 <span class='fa fa-heart' style='color: #ff928a;'></span>";
    }else{
        $likenum = $likes_num." <span class='fa fa-heart' style='color: #ff928a;'></span>";
    }
    // Delete notification to user
    $get_post_authorId = $con->prepare("SELECT author_id FROM posts WHERE post_id=:plike");
    $get_post_authorId->bindParam(':plike',$plike,PDO::PARAM_INT);
    $get_post_authorId->execute();
    while ($getAuthor = $get_post_authorId->fetch(PDO::FETCH_ASSOC)) {
    $s_id = $_SESSION['id'];
    $notifyType = "like";
    $for_id = $getAuthor['author_id'];
    $sendNotification = $con->prepare("DELETE FROM notifications WHERE from_id =:from_id AND for_id=:for_id AND notifyType_id=:ntId AND notifyType=:notifyType");
    $sendNotification->bindParam(':from_id',$s_id,PDO::PARAM_INT);
    $sendNotification->bindParam(':for_id',$for_id,PDO::PARAM_INT);
    $sendNotification->bindParam(':ntId',$plike,PDO::PARAM_INT);
    $sendNotification->bindParam(':notifyType',$notifyType,PDO::PARAM_STR);
    $sendNotification->execute();
    }
    // ==================================
    }else{
    $like_sql = "INSERT INTO likes VALUES (:lid,:s_id,:plike)";
    $like = $con->prepare($like_sql);
    $like->bindParam(':lid',$lid,PDO::PARAM_INT);
    $like->bindParam(':s_id',$s_id,PDO::PARAM_INT);
    $like->bindParam(':plike',$plike,PDO::PARAM_INT);
    $like->execute();
    $likebtn = "<span onclick=\"likeUnlike('$plike')\" style='color:#ff928a;font-size:30px' data-toggle='tooltip' data-placement='top' title='".lang('u_liked_this')."' id='punlike'><span class=\"fa fa-heart\"></span></span>";

        // update likes number
        $likes_sql = "SELECT id FROM likes WHERE post_id=:plike";
        $likes = $con->prepare($likes_sql);
        $likes->bindParam(':plike',$plike,PDO::PARAM_INT);
        $likes->execute();
        $likes_num = $likes->rowCount();
        $makeChangeSql = "UPDATE posts SET p_likes=:likes_num WHERE post_id=:plike";
        $makeChange = $con->prepare($makeChangeSql);
        $makeChange->bindParam(':likes_num',$likes_num,PDO::PARAM_INT);
        $makeChange->bindParam(':plike',$plike,PDO::PARAM_INT);
        $makeChange->execute();
        if ($likes_num == 0) {
        $likenum = "<span class='fa fa-heart'></span> ".lang('no_likes');
        }elseif ($likes_num == 1){
            $likenum = "1 <span class='fa fa-heart' style='color: #ff928a;'></span>";
        }else{
            $likenum = $likes_num." <span class='fa fa-heart' style='color: #ff928a;'></span>";
        }
        // send notification to user
        $get_post_authorId = $con->prepare("SELECT author_id FROM posts WHERE post_id=:plike");
        $get_post_authorId->bindParam(':plike',$plike,PDO::PARAM_INT);
        $get_post_authorId->execute();
        while ($getAuthor = $get_post_authorId->fetch(PDO::FETCH_ASSOC)) {
        $nId = rand(0,999999999)+time();
        $s_id = $_SESSION['id'];
        $for_id = $getAuthor['author_id'];
        $notifyType = "like";
        $nSeen = "0";
        $nTime = time();
        if ($for_id != $s_id) {
        $sendNotification = $con->prepare("INSERT INTO notifications (n_id, from_id, for_id, notifyType_id, notifyType, seen, time) VALUES (:nId, :fromId, :forId, :notifyTypeId, :notifyType, :seen, :nTime)");
        $sendNotification->bindParam(':nId',$nId,PDO::PARAM_INT);
        $sendNotification->bindParam(':fromId',$s_id,PDO::PARAM_INT);
        $sendNotification->bindParam(':forId',$for_id,PDO::PARAM_INT);
        $sendNotification->bindParam(':notifyTypeId',$plike,PDO::PARAM_INT);
        $sendNotification->bindParam(':notifyType',$notifyType,PDO::PARAM_STR);
        $sendNotification->bindParam(':seen',$nSeen,PDO::PARAM_INT);
        $sendNotification->bindParam(':nTime',$nTime,PDO::PARAM_INT);
        $sendNotification->execute();
        }
        }
        // ==================================
}

$arr = array();
$arr[0] = $likebtn;
$arr[1] = $likenum;
echo json_encode($arr);
exit;
?>
