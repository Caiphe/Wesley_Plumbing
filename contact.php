<?php
include('header.php');
?>

<body>
  <?php

  $name = $email = $subject = $msg = "";
  $errors = array();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $errors[] = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $errors[] = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
      }
    }


    if (empty($_POST["subject"])) {
      $errors[] = "Subject is required";
    } else {
      $subject = test_input($_POST["subject"]);
      if (!preg_match("/^[a-zA-Z ]*$/", $subject)) {
        $errors[] = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["msg"])) {
      $errors[] = "Comment is required";
    } else {
      $msg = test_input($_POST["msg"]);
    }

    if (!$errors) {
      $to = 'caipheilunga@gmail.com';
      $subject  = $_POST["subject"];
      $message  = $_POST["msg"];
      $headers  = 'From:' . $email . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8';
      if (mail($to, $subject, $message, $headers)) {
        echo " ";
      } else {
        echo "Email sending failed";
      }
    }
  }
  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <style type="text/css">
    .error {
      color: #A31E09;
      right: 0;
      float: right;
      margin-right: 10px;
      margin-top: -45px;
      z-index: 9999;
      font-size: 23px;
      display: none;
    }

    .success_validate {
      color: #157518;
      right: 0;
      float: right;
      margin-right: 10px;
      margin-top: -45px;
      z-index: 9999;
      font-size: 23px;
      display: none;
    }

    iframe {}

    .facebook_icon {
      font-size: 20px;
      padding: 7px 16px;
      border: solid 1px #000;
      border-radius: 5px;
      background-color: #3960a3;
      color: white;
      transition: 1s;
    }

    .facebook_icon:hover {
      background-color: #0c3159;
      color: #fff;
      box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.4), 0 2px 9px 0 rgba(0, 0, 0, 0.14);
    }
  </style>
  <br><br><br><br>
  <div class="container">
    <br>
    <h1 class="myHeading">CONTACT US</h1>
    <div align="center">
      <p class="underLine"></p>
      <br>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <form class="form" id="myContactForm" method="post" action="engine.php">
          <div class="contactForm">

            <div class="row">
              <div class="col-md-6">
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Name">
                <label class="error animated slidInLeft" id="ErrorFirst"><i class="icon ion-ios-close"></i></label>
                <label class="success_validate" id="successName"><i class="icon ion-checkmark-circled"></i></label>
              </div>
              <div class="col-md-6">
                <input type="number" name="contactNumber" class="form-control" id="contactNumber" placeholder="Contact Number">
                <label class="error animated slidInLeft" id="errorContact"><i class="icon ion-ios-close"></i></label>
                <label class="success_validate" id="successContact"><i class="icon ion-checkmark-circled"></i></label>
              </div>

            </div>

            <div class="row">
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" id="email" placeholder="Address Email">
                <label class="error animated slidInLeft" id="erroEmail"><i class="icon ion-ios-close"></i></label>
                <label class="success_validate" id="successEmail"><i class="icon ion-checkmark-circled"></i></label>
              </div>
              <div class="col-md-6">
                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                <label class="error animated slidInLeft" id="errorSubject"><i class="icon ion-ios-close"></i></label>
                <label class="success_validate" id="successSubject"><i class="icon ion-checkmark-circled"></i></label>
              </div>
            </div>

            <div class="form-group">
              <textarea cols="4" rows="5" id="message" class="form-control" placeholder="Type Your message here..."></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-default btn-block" id="sendEmail" name="sendEmail"> <i class="ionicon ion-ios-paperplane"></i> SEND</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <p style=" text-align:justify;font-size:17px;font-family: 'Open Sans', sans-serif;">
          <b>Email :</b> swanepoelwesley@gmail.com<br>
          <b>Tel :</b> 031 301 1604 <br> <b>Cell :</b> 076 521 0734<br><br>
          <b>Address :</b> Office 106 Salbany House <br> 50 ALBANY Grove Durban Central<br> 4001</p>
        <a class="facebook_icon" href="https://www.facebook.com/pg/Wesleys-Plumbing-Contracting-484618658291987/about/?ref=page_internal" target="_blank"><i class="ionicon ion-social-facebook"></i></a>
        <br>

        <br>

      </div>
      <br><br><br>
      <div class="form-group">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.163024210922!2d31.02529441471318!3d-29.85957198194996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7a9b675b4b53d%3A0x4b7958a3067c9694!2s50+Albany+Grove%2C+Durban%2C+4001!5e0!3m2!1sen!2sza!4v1489478753636" width="100%" height="350" frameborder="0" style="border:solid 2px #dbdbdb;" allowfullscreen></iframe>
      </div>
      <br>
    </div>
    <br>
  </div>

  <?php
  include('footer.php');
  ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#firstName").focus();


      var errorName = false;
      var errorCont = false;
      var errorEm = false;
      var errorSub = false;
      var errorMes = false;

      $("#firstName").focusout(function() {
        checkName();
      });

      $("#contactNumber").focusout(function() {
        checkContact();
      });

      $("#email").focusout(function() {
        checkEmail();
      });

      $("#subject").focusout(function() {
        checkSubject();
      });

      $("#message").focusout(function() {
        checkMessage();
      });



      function checkName() {
        if ($("#firstName").val().length < 3) {
          $("#ErrorFirst").fadeIn(500);
          $("#firstName").css('border', 'solid 1px #A31E09');
          $("#successName").hide();
          errorName = true;
        } else {
          $("#firstName").css('border', 'solid 1px  #157518');
          $("#ErrorFirst").hide();
          $("#successName").fadeIn(700);
        }
      };

      function checkContact() {
        if ($("#contactNumber").val().length < 5) {
          $("#errorContact").fadeIn(500);
          $("#contactNumber").css('border', 'solid 1px #A31E09');
          $("#successContact").hide();
          errorCont = true;
        } else {
          $("#contactNumber").css('border', 'solid 1px  #157518');
          $("#errorContact").hide();
          $("#successContact").fadeIn(700);
        }
      };

      function checkEmail() {
        if ($("#email").val().length < 5) {
          $("#erroEmail").fadeIn(500);
          $("#email").css('border', 'solid 1px #A31E09');
          $("#successEmail").hide();
          errorEm = true;
        } else {
          $("#email").css('border', 'solid 1px  #157518');
          $("#erroEmail").hide();
          $("#successEmail").fadeIn(700);
        }
      };

      function checkSubject() {
        if ($("#subject").val().length < 5) {
          $("#errorSubject").fadeIn(500);
          $("#subject").css('border', 'solid 1px #A31E09');
          $("#successSubject").hide();
          errorSub = true;
        } else {
          $("#subject").css('border', 'solid 1px  #157518');
          $("#errorSubject").hide();
          $("#successSubject").fadeIn(700);
        }
      };

      function checkMessage() {
        if ($("#message").val().length < 5) {
          $("#message").css('border', 'solid 1px #A31E09');
          errorMes = true;
        } else {
          $("#message").css('border', 'solid 1px  #157518');
        }
      };

      $("#myContactForm").submit(function() {
        errorName = false;
        errorCont = false;
        errorEm = false;
        errorSub = false;
        errorMes = false;


        checkName();
        checkContact();
        checkEmail();
        checkSubject();
        checkMessage();

        if (errorName == false && errorCont == false && errorEm == false && errorSub == false && errorMes == false) {
          return true;
        } else {
          return false;
        }
      });
    });
  </script>