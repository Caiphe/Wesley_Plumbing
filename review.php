<?php
include('db.php');

// 
$getComment = $db->query("SELECT * FROM reviews WHERE approve ='1' ORDER BY comment_id DESC LIMIT 0,5");
$comment_count = $getComment->rowCount();

// Get the rest of the review
$readMore = $db->query("SELECT * FROM reviews WHERE approve ='1' ORDER BY comment_id DESC LIMIT 5,15");
$readMoreCount = $readMore->rowCount();

if ($comment_count > 0) {
    $comment_content = '0';
    $com = 'Comment';
} else {
    $comment_count = $comment_count;
    $com = 'Comments';
}

date_default_timezone_set('Africa/Johannesburg');
function myAgoTime($timestamp)
{
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;
    $minutes = round($seconds / 60);           // value 60 is seconds  
    $hours = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
    $days = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
    $weeks = round($seconds / 604800);          // 7*24*60*60;  
    $months = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
    $years = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  

    if ($seconds <= 60) {
        return "Just Now";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "one min ago";
        } else {
            return "$minutes min ago";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "an hour ago";
        } else {
            return "$hours hrs ago";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "yesterday";
        } else {
            return "$days days ago";
        }
    } else if ($weeks <= 4.3) //4.3 == 52/12  
    {
        if ($weeks == 1) {
            return "a week ago";
        } else {
            return "$weeks weeks ago";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "a month ago";
        } else {
            return "$months months ago";
        }
    } else {
        if ($years == 1) {
            return "one year ago";
        } else {
            return "$years years ago";
        }
    }
}

$output = '';
while ($row = $getComment->fetch()) {
    $date_time = $row['date_time'];
    // Getting the likes from Like table
    $getLikes = $db->prepare('SELECT likes_count FROM likes_table WHERE comment_id = ?');
    $getLikes->execute(array($row["comment_id"]));
    $likesResult = $getLikes->fetch();

    $countNumber = 0;
    if ($likesResult[0] > 0) {
        $countNumber = $likesResult[0];
    }
    //var_dump($likesResult);
    $likesCounts = $getLikes->rowCount();

    $coment_id = $row["comment_id"];

    if ($likesCounts < 1) {
        $likesCounts = 0;
    } else {
        $likesCounts = $likesCounts;
    }

    $output .= '
    <div class="comment-cont" >
         <div class="inner-comment-one" >
           <img src="img/review/user.png">
         </div>
         <div class="inner-comment-two">
            <div class="comment-first-div">
                <p class="names"> By <span class="user-name">' . ucwords($row["comment_sender_name"]) . '</span></p>
                
                   <p class="likes-count"> 
                       <a id="' . $row["comment_id"] . '"  href="like.php?id=' . $row["comment_id"] . '"  class="-btnlike like_btn "><i class="icon ion-ios-heart heart-icon "></i></a> ' . $countNumber . '
                   </p>
            
             </div>
             <div class="comment-second-div">
               <p class="actual-comment">' . $row["comment"] . '</p>
             </div>
             <div class="coment-third-div">
                <p>
                   <i class="icon ion-ios-clock-outline"></i> <span class="date_time">' . myAgoTime($row["date_time"]) . '<span>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <i class="icon ion-ios-arrow-down my_arrow_down"></i> <span class="date_time">Reply<span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <ion-icon name="radio-button-on"></ion-icon> &nbsp;&nbsp;&nbsp;
                   <i class="icon ion-ios-eye my_arrow_down"></i> <span class="date_time">  12 Views <span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <img src="img/review/comment-icon.png"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
             </div>
         </div>
    </div>
    ';
}


if (isset($_POST["btn-submit"])) {
    $comment_name = htmlspecialchars($_POST["comment_name"]);
    $comment_content = htmlspecialchars($_POST["comment_content"]);


    if (!empty($comment_name and !empty($comment_content))) {
        $InsertComment = $db->prepare('INSERT INTO reviews(comment_sender_name, comment) VALUES(?, ?)');
        $InsertComment->execute(array($comment_name, $comment_content));
        //echo ("Your comment is added ");
        $added_comment = "Thanks for Your Comment";
        $subject = 'Review From wesleys Plumbing';
        $to = 'caipheilunga@gmail.com';

        // Prepare The Email Body Text
        $Body = 'A comment has been added Thanks';
        "
            
        ";

        //Send Email
        $headers  = 'From:' . $comment_name . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';

        (mail($to, $subject, $Body, $headers));
    }
}

include('header.php');

?>
<link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/review.css">
<div class="space-between"></div>
<div class="review-heading" style="background:url('img/review/main-img.png')">
    <div class="header-container" align="center">
        <h1 class="myHeading "> REVIEWS</h1>
        <p class="underline"></p>
    </div>
</div>
<div class="container reviews-details-container">
    <div class="row">

        <div class="col-md-6 ">
            <div class="main-left-container ">
                <p class="complete-form wow fadeInUp" data-wow-offset="0" data-wow-delay="1.5s">Complete The Form and Publish</p>
                <p class="under_line"></p>
                <div style="height:5px;"></div>
                <div class="main-form-container">
                    <form method="POST" class="comment_form" id="comment_form">
                        <div class="form-group">
                            <input class="form-control" placeholder="Full Name" id="comment_name" name="comment_name" type="text">
                            <span class="success-icons animated slideInLeft" id="success_name">
                                <ion-icon name="done-all"></ion-icon>
                            </span>
                            <span class="errorlist animated fadeInUp" id="name_error_msg">Full Name required</span>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group">
                            <textarea class="form-control" name="comment_content" id="comment_content" placeholder="Comment"></textarea>
                            <span class="success-icons animated slideInLeft" id="success_comment">
                                <ion-icon name="done-all"></ion-icon>
                            </span>
                            <span class="errorlist animated fadeInUp" id="comment_error">Commment Required</span>
                        </div>
                        <div style="height:30px;"></div>
                        <div class="form-group">
                            <input type="hidden" name="comment_id" id="comment_id" value="0" />
                            <button class="btn-submit" id="btn-submit" name="btn-submit" type="submit"> Publish </button>
                        </div>
                    </form>
                </div>

                <?php
                if (isset($added_comment)) {
                    ?>
                    <div class="overlay-div animated slideInLeft" id="overlay-div">
                        <div class="loader-container">
                            <div style="transform: translate(50%, 17%);">
                                <img src="img/loader/checkmark.gif">
                            </div>
                        </div>
                    </div>
                <?php

                }
                ?>

                <!--Overlay Dive -->
                <div class="comments-container">
                    <p class="comment-count"><img src="img/review/comment-icon.png"> <?= $comment_count ?> Comments </p>
                    <p class="comment_under_line"></p>
                    <div style="height:10px;"></div>
                    <div id="display_comment" class="display_comment">
                        <?= $output; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="right-containers">
                <div class="image-container-right">
                    <img class="thumbnail my-gif-img" src="img/review/review.gif">
                </div>

                <div class="image-container-right">
                    <img class="thumbnail" src="img/review/review-img.jpg">
                </div>

                <div class="image-container-right" id="latest-gif">
                    <img class="thumbnail" src="img/review/comment-more.gif">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($added_comment)) {
    ?>
    <div class="comment_alert animated zoomInUp">
        <p class="comment_out_come" id="comment_out_come"><?= $added_comment ?></p>
    </div>
<?php

}
?>


<div class="litle-bar"></div>
<div class="bottom-social-banner" style="background:url('img/review/bottom-img.png')">
    <div class="contact-details-container" align="center">
        <h1 class="contact-details"><span>Tell No</span> : 031 301 1604 / <span>Cell No</span> : 076 521 0734 <br>
            <span>Email</span> : swanepoelwesley@gmail.com
        </h1>
    </div>
</div>

<?php
include('footer.php');
?>
<!-- <div class="bottom-footer">
     <p>Copyright © 2018 | www.wesleysplumbing.co.za | All Rights Reserved.<p>
     <p class="social-mde"><a href="" target="_blank"><i class="fa fa-facebook"></i></a> </p>
</div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootshape.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/paraxify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.0/dist/ionicons.js"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
        //$(".second-owner-info").show().find(":input").prop("disabled", false);
        'use strict'

        var errorName = false;
        var errorComment = false;

        $('#comment_name').keyup(function() {
            CheckName();
        })

        $('#comment_content').keyup(function() {
            CheckContent();
        })

        function CheckName() {
            if ($("#comment_name").val().length < 2) {
                $("#name_error_msg").css('display', 'block');
                $("#comment_name").css('border', 'solid 1px rgb(153, 13, 13)');
                $("#success_name").hide();
                errorName = true;
            } else {
                $("#name_error_msg").css('display', 'none');
                $("#success_name").show();
                $("#comment_name").css('border', 'solid 1px rgb(5, 99, 5)');
            }
        }

        function CheckContent() {
            if ($("#comment_content").val().length < 2) {
                $("#comment_error").css('display', 'block');
                $("#comment_content").css('border', 'solid 1px rgb(153, 13, 13)');
                $("#success_comment").hide();
                errorComment = true;
            } else {
                $("#comment_error").css('display', 'none');
                $("#success_comment").show();
                $("#comment_content").css('border', 'solid 1px rgb(5, 99, 5)');
            }
        }

        $('#comment_form').submit(function() {
            errorName = false;
            errorComment = false;

            CheckContent();
            CheckName();

            if (errorName == false && errorComment == false) {
                return true;
            } else {
                return false;
            }
        })

    })
</script>
<script type="text/javascript">
    setTimeout('errormessage()', 4000);

    function errormessage() {
        $(".errorlist").fadeOut(2000);
    }

    setTimeout('errormessage()', 4000);

    function errormessage() {
        $(".comment_alert").addClass('zoomOutDown');
    }

    setTimeout('overLay()', 5000);

    function overLay() {
        //$(".overlay-div").fadeOut(2000);
        $("#overlay-div").removeClass("slideInLeft");
        $("#overlay-div").addClass("fadeOutUp");

    }

    $('.like_btn').on('click', function() {
        var post_id = $(this).data('id');
        alert('post_id').val();
        $.ajax({
            url: 'likes.php',
            type: 'POST',
            success: function(html) {
                $(".comment_alert").css('display', 'block');
                $("#comment_out_come").html(html);

            }
        });
    });
</script>