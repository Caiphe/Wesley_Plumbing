<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;wesleys_data=testing', 'root', 'root');


 $query =$connect->prepare ("INSERT INTO tbl_comment (parent_comment_id, comment, comment_sender_name) VALUES (?, ?, ?)");
 $query->execute(array($_POST["comment_id"], $comment_content, $comment_name));
 $error = '<label class="text-success">Comment Added</label>';




?>