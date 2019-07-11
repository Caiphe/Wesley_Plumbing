<?php 
   include('header.php');
?>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
<style type="text/css">
  .caption p{
  text-align:center:font-weight:bold;
  color:#900C0C;
  margin-top: -10px;
  font-size:25px; 
  font-family: 'Anton', sans-serif;
}
.welcome{
  text-align:center;
  color:#073C49;
  font-family: 'Anton', sans-serif;
}
</style>

    <!-- Slide gallery -->
    <div class="jumbotron">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/carousel11.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel2.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel1.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
		  <div class="item">
            <img src="img/carousel4.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev" style="" id="slider_control">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next" id="slider_control">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div><!-- End Slide gallery -->
	<div class="container">
	  <div class="row"> 
	  <h1 class="welcome wow fadeInDown" data-wow-offset="0" data-wow-delay="1.0s">WELCOME TO WESLEY'S PLUMBING AND CONSULTING</h1><br>
	   <div class="col-lg-6 col-md-6 col-sm-6">
	   <p style=";text-align:justify; font-family: 'Open Sans', sans-serif;" class=" wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
	   We are a Durban based plumbing company with over 7 years experience in the industry. 
	   Although we are primarily based in Durban Central, we offer our services across Durban and surrounding areas. We at <span style="font-weight:bold;color:blue;">WESLEY'S Plumbing & Consulting</span> strive to be the best and most professional plumber in Durban, ensuring professional and uncompromising workmanship with a smile.With our extensive knowledge in the plumbing field, no job is too difficult, too big, too small or unsolvable to us.<a href="about-wesley-plumbing" style="color:red;">Read more...</a></p>
	  </div>
	  <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
	  <p style=";text-align:justify; font-fa mily: 'Open Sans', sans-serif;">
	  We pride ourselves in keeping up to date with all the new plumbing technology & innovations and use them to our advantage in our every-day plumbing jobs.
	  
	  </p>
	  </div>
	 </div>
	</div>
    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4  wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
        <div class="thumbnail">
          <a class="thumbnail"><img src="img/pic1.jpg" alt="" class="img-circle"></a>
          <div class="caption">
            <p class="text-center " id="myCircleTile">SANITARY</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="1.5s">
        <div class="thumbnail">
          <a class="thumbnail"><img src="img/pic4.jpg" alt="" class="img-circle"></a>
          <div class="caption">
            <p class="text-center" >DRAIN LAYER</p>
                        
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="1.9s">
        <div class="thumbnail">
          <a class="thumbnail"><img src="img/pic3.jpg" alt="" class="img-circle"></a>
          <div class="caption">
            <p class="text-center" >PLUMBING</p>
          </div>
        </div>
      </div>
    </div><!-- End Thumbnails -->
    <!-- Content -->
    <!-- Footer -->
   <?php 
     include('footer.php');
   ?>