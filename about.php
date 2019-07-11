<?php 
   include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/about.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Muli" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Francois+One|Pontano+Sans|Questrial" rel="stylesheet">
<style type="text/css">
    .paraxify {
     background: url(img/parax.jpg) no-repeat;
     background-attachment: fixed;
     background-position: center center;
   	background-size: cover;
	height:300px;
}
.paraxify p{
	z-index: 1;
	background:rgba(0, 0, 0, 0.431);
	color:white;
	margin:100px auto;
	text-align: center;
}
.our_clients .main_title{
  text-align: center;font-size: 30px;
}
.client_card{
  margin-top:20px;
  box-shadow: 0 3px 6px 0 rgba(0,0,0,0.2);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  transition: 0.3s;
  width: 33.33%;
  margin-left:10px;
  margin-bottom: 20px;
  border:solid 1px #032d54;
  overflow: hidden;
}
.client_card:hover{
   box-shadow: 0 5px 10px 2px rgba(0,0,0,0.4);
}
.our_clients .container{
  display: flex;
}
.our_clients .container .client_card{
  flex: 1 1 0;
}
.client_card img{
   border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom: 2px solid #6b0732;
  -moz-transition: all 1s;
  -webkit-transition: all 1s;
  transition: all 1s;
}
.client_card img:hover{
  -moz-transform:scale(1.1);
  -webkit-transform:scale(1.1);
  transform:scale(1.1);
}
.card_content{
  margin-top: 20px;
  text-align: center;
}
.card_content .person{
  font-size: 17px;
  color:#062b6b;
  font-family: 'Questrial', sans-serif;
  font-weight: bold;
}
.locations{
  background-color:#bf0f0f;padding:4px;
  color: white;font-size:15px;
}

</style>
  <body>
	<br><br><br><br>
	<div class="container">
	<br>
		<div align="center">
		<h1 class="myHeading">ABOUT US</h1>
		<p class="underLine"></p>
	     <br>
	  </div>
	</div>
	<div class="container" >
	<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6">
	<span class="team">Why Us?</span><br>
	<p style=";text-align:justify; font-family: 'Open Sans', sans-serif;" >
	1.	We promise satisfaction. No job is ever done until you are fully satisfied.<br>
    2.	We quote fairly and realistically. You approve the price before we start the job.<br>
    3.	Our trained and experienced technicians are the best in the business.<br>
    4.	We love your property like its our own. Trusting a craftsman to work on your investment or home is a big leap of trust. We appreciate this and will lovingly care for your property like we owned it.<br>
    5.	We are accountable! We only hire the best and as such can guarantee the quality of our work.<br>
    6.	We provide ongoing training for all employees to help us remain current with the latest products and methods, customer care is paramount to us and we strive to excel.<br>
	7.	We are here to help 24/7.
.</p>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6" >
	<p style="text-align:justify;font-family: 'Open Sans', sans-serif;" >
	<br><br>Being in the plumbing industry, we know that these little plumbing surprises does not keep office hours and usually strikes at the most inconvenient times, that is why we are available 24 hours, 7 days a week, 365 days a year. 
	<br><br>We firmly believe in being liable for the work we do and thus we are registered and accredited.  We endeavor to always be as timely as life allows and if we cannot make an appointment on time due to unforeseen circumstances, we will surely give you a call to keep you informed.</p>
    <p style="font-weight:bold;">Click <a href="img/CompanyPoof.pdf" target="_blank">here </a> View Our Company profile</p>
	
	</div>
	</div>
	</div>
	<div class="thumbs">
    <div class="container ">
      <div class="col-sm-6 col-md-4">
        
            <h2 class="aboutTit">MISSION</h2>
            <p style="text-align:justify; font-family: 'Open Sans', sans-serif;" class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
			We endeavour to provide the most reliable and efficient service, without compromising on quality or safety. We are committed to supporting not for profit organisations that are striving to make a difference in the lives of people in our community.</p>
            <br>
      </div>
      <div class="col-sm-6 col-md-4">
       
         
          <div class="caption">
            <h2 class="aboutTit" >VISION</h2>
            <p style="text-align:justify; font-family: 'Open Sans', sans-serif;" class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.5s">
			WESLEY's Plumbing Consulting vision is to be known as the market leaders in Durban and all over South Africa and to be recognised for our commitment to service and innovation throughout the plumbing industry.</p><br>        
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
         
            <h2 class="aboutTit">VALUE</h2>
            <p style="text-align:justify; font-family: 'Open Sans', sans-serif;" class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.9s">
			Our customers are our most valuable asset and customer requirements come first. We will deliver a quality service that is second to none reliably, efficiently and safely every single time. This is reflected in our flexibility, both as individuals and as a business.</p>
         
        </div>
      </div>
  </div>

  <div class="our_clients">
       <p class="team"></p>
     <p class="team">REFERENCES / OUR CLIENTS</p>
     <div align="center"><p class="underLine"></p></div>
    <div class="container">
     
        <a href="https://www.wakefields.co.za/" target="_blank" class="client_card">
            <img src="img/clients/wakefields.jpg" alt="Avatar" style="width:100%">
            <div class="card_content">
              <p class="person"><i class="ionicon ion-ios-contact"></i> GAVAN SIVIER </p>
              <p class="person"><i class="ionicon ion-android-call"></i> 031 204 7400</p>
              <p class="locations">----</p>
            </div>
    </a>

         <a href="http://www.infinitepropertymanagement.co.za/" target="_blank" class="client_card">
            <img src="img/clients/infinite.jpg" alt="Avatar" style="width:100%">
             <div class="card_content">
              <p class="person"><i class="ionicon ion-ios-contact"></i> KIMBLEY</p>
              <p class="person"><i class="ionicon ion-android-call"></i> 031 764 2385</p>
              <p class="locations">Based in Hillcrest</p>
            </div>
</a>
        <div class="client_card">
            <img src="img/clients/Logo.png" alt="Avatar" style="width:100%">
             <div class="card_content">
              <p class="person"><i class="ionicon ion-ios-contact"></i> COLLEEN</p>
              <p class="person"><i class="ionicon ion-android-call"></i> 031 563 7214</p>
              <p class="locations">----</p>
            </div>
        </div>
    </div>
  </div>



  <div class="paraxify">
 
  </div>
  <!--<div>
  	<video style="width: 100%;height: 300px;" autoplay="autoplay" autobuffer="autobuffer"> 
  		<source src="video/video.mp4" type="">
  	</video>
  </div>-->

 


  <div class="container">
  	<p class="team">MEET THE TEAM</p>
  	 <div class="meet_team">
  	 	<div class="row">
  	 		<div class="column wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
  	 			<div class="myCard">
  	 			   <div class="myCardContent">
  	 			   	  <img src="img/team/wes.jpg">
  	 			   </div>
  	 			   <h3 class="animated flipInY" id="myFlash">WESLEY</h3>
	  	 		   <p>Owner & Plumber</p>
  	 		    </div>
  	 		</div>

  	 		<div class="column wow fadeInUp" data-wow-offset="0" data-wow-delay="0.8s">
  	 			<div class="myCard">
  	 			   <div class="myCardContent">
  	 			   	  <img src="img/team/ndu.jpg">
  	 			   </div>
  	 			    <h3 class="animated flipInY" id="myFlash">NDU</h3>
	  	 			  <p>Plumber</p>
  	 		    </div>
  	 		</div>

  	 		<div class="column wow fadeInUp" data-wow-offset="0" data-wow-delay="1s">
  	 			<div class="myCard">
  	 			   <div class="myCardContent">
  	 			   	  <img src="img/team/Mike.jpg">
  	 			   </div>
  	 			   <h3 class="animated flipInY" id="myFlash">MIKE</h3>
	  	 			<p>Labour</p>
  	 		    </div>
  	 		</div>

  	 		<div class="column wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">
  	 			<div class="myCard">
  	 			   <div class="myCardContent">
  	 			   	  <img src="img/team/vusi.jpg">
  	 			   </div>
  	 			   <h3 class="animated flipInY" id="myFlash">VUSI</h3>
	  	 			<p>Plumber Assistant</p>
  	 		    </div>
  	 		</div>
  	 	</div>
  	 </div>
  </div>
   <?php 
     include('footer.php');
   ?>
   <script type="text/javascript">
   	  myParaxify = paraxify('.paraxify');
   </script>