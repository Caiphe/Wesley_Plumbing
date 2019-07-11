<?php 
include('db.php');
$getid = intval($_GET['id']);
$ip_address = $_SERVER['REMOTE_ADDR'];
#$_SERVER['SERVER_ADDR'];

$getLikesCount = $db->prepare('SELECT * FROM likes WHERE comment_id = ? AND ip_address = ?');
$getLikesCount->execute(array($getid, $ip_address));
$rowCounts = $getLikesCount->rowCount();

if ($rowCounts < 1) {
     $InsertLikes = $db->prepare("INSERT INTO likes(comment_id,likes_count,ip_address) VALUES(?, ?, ?)");
     $InsertLikes->execute(array($getid, 1, $ip_address));
     echo ('Inserted Into First');
     echo("<br>");
     updateLikesCount($getid);
     header('location:review.php');

} 
else 
{
     //echo ("You exist");
     header('location:review.php');

}

function updateLikesCount($getid) {
     global $db;

     $getLikesTable = $db->prepare('SELECT likes_count FROM likes_table WHERE comment_id = ?');
     $getLikesTable->execute(array($getid));
     $lkCcunts = $getLikesTable->rowCount();
     $fetchLikes = $getLikesTable->fetch();
     $increasCount = $fetchLikes[0] + 1;

echo $increasCount;

     if ($lkCcunts === 0) {
          $InsertLikeTable = $db->prepare("INSERT INTO likes_table (comment_id,likes_count) VALUES(?, ?)");
          $InsertLikeTable->execute(array($getid, 1));
          echo "Interted into likes Count table";
          header('location:review.php');
     } else {
          $UpdateLikeTable = $db->prepare('UPDATE likes_table set likes_count = ? WHERE comment_id = ?');
          $UpdateLikeTable->execute(array($increasCount, $getid));
          echo " One Row updated";
          header('location:review.php');
     }
}

?>