<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keyword" content="wesleys plumbing consulting;wesleys Plumbing;Wesley's;plumbing in durban;toilet;geyser;gutter;plumber in durban;plumbing;Plumbing in Durban Central;Plumbing in Albany
	wesleys plumbing">
  <meta name="description	" content=" We are a Durban based plumbing company with over 7 years experience in the industry. Although we are primarily based in Durban Central, we offer our services across Durban and surrounding areas. We pride ourselves in keeping up to date with all the new plumbing technology & innovations and use them to our advantage in our every-day plumbing jobs. 	">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <link href="css/bootshape.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/w3school3.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/ionicons.css">
  <link rel="stylesheet" type="text/css" href="css/bootshape.css">

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-96002350-1', 'auto');
    ga('send', 'pageview');
  </script>
  <style type="text/css">
    .actuel {}
  </style>
  <link rel="apple-touch-icon" sizes="57x57" href="flav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="flav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="flav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="flav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="flav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="flav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="flav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="flav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="flav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="flav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="flav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="flav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="flav/favicon-16x16.png">
  <link rel="manifest" href="flav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="flav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

</head>

<body>
  <!-- Navigation bar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--<a class="navbar-brand" href="index.php"><span class="green">WESLEY'S</span> <span style="font-size:15px;color:white;font-family: 'Open Sans', sans-serif;">Plumbing Consulting</span></a>-->
        <a class="navbar-brand" id="myBrand" href="home-welcome"><img src="img/logoWes.png"></a>
      </div>
      <nav role="navigation" class="collapse navbar-collapse navbar-right" id="navigat">
        <ul class="navbar-nav nav" id="myBtnContainers">
          <li><a href="home-welcome" class="myLinks actuel" id="homButton">HOME</a></li>
          <li><a href="about-wesley-plumbing" class="myLinks">ABOUT US</a></li>
          <li><a href="what-we-do" class="myLinks">OUR SERVICES</a></li>
          <!--<li><a href="request.php" class="myLinks">REQUEST A QUOTE</a></li>-->
          <li><a href="our-reviews" class="myLinks">REVIEWS</a></li>
          <li><a href="our-gallery" class="myLinks">GALLERY</a></li>
          <li><a href="contact-us" class="myLinks">CONTACT US</a></li>
          <!--<li><a href="https://www.facebook.com/pg/Wesleys-Plumbing-and-contracting-PtyLtd-484618658291987/about/?ref=page_internal" target="_blank" style="font-size:22px;color:#38A4DA;"><i class="fa fa-facebook-square" ></i></a></li>-->
        </ul>
      </nav>
    </div>
  </div>

  <script type="text/javascript">
    /* var swicthMenu = function(){
        var classes = document.querySelector('#homButton').className;
        console.log(classes.val);
        classes = classes.replace(new RegExp("actuel", "g"),"");
        document.querySelector("#homButton").className = classes;

        classes = d0cument.querySelector(".myLinks").className;
        if(classes.indexOf("actuel") == -1){
          classes += " actuel";
          document.querySelector(".myLinks").className = classes;
        }
      };*/

    var btnContainer = document.getElementById("myBtnContainers");
    var btns = btnContainer.getElementsByClassName("myLinks");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("actuel");
        current[0].className = current[0].className.replace(" actuel", "");
        this.className += " actuel";
      });
    }
  </script>