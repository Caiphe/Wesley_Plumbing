<?php

//fetch_comment.php
// $connect = new PDO('mysql:host=localhost;dbname=testing', 'root', 'root');
include('db.php');

$getComment = $db->query("SELECT * FROM reviews ORDER BY comment_id DESC ");
$comment_count = $getComment->rowCount();
//$result = $query->fetch();

$output = '';

while($row = $getComment->fetch()){
    $output .= '
    <div class="panel panel-default">
    <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date_time"].'</i></div>
    <div class="panel-body">'.$row["comment"].'</div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
    </div>
    ';
}

echo $output;



// foreach($result as $row)
// {
//  $output .= '
//  <div class="panel panel-default">
//   <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date_time"].'</i></div>
//   <div class="panel-body">'.$row["comment"].'</div>
//   <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
//  </div>
//  ';
// }



// function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
// {
//  $query = "
//  SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
//  ";
//  $output = '';
//  $statement = $connect->prepare($query);
//  $statement->execute();
//  $result = $statement->fetchAll();
//  $count = $statement->rowCount();
//  if($parent_id == 0)
//  {
//   $marginleft = 0;
//  }
//  else
//  {
//   $marginleft = $marginleft + 48;
//  }
//  if($count > 0)
//  {
//   foreach($result as $row)
//   {
//    $output .= '
//    <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
//     <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
//     <div class="panel-body">'.$row["comment"].'</div>
//     <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
//    </div>
//    ';
//    $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
//   }
//  }
//  return $output;
// }

?>