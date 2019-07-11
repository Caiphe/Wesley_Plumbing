<?php 
  include('header.php');
?>
 <link rel="stylesheet" type="text/css" href="css/services.css">
  <body>
    <!-- Slide gallery -->

	<div align="center" class="heading_container">
		<h1 class="myHeading">OUR SERVICES</h1>
		<p class="underLines"></p>
	     <br>
	</div>
	
	<section class="services_sections_one">
		<div class="container">
			<div class="container-row">
				<div class="col-lg-4 col-md-4 col-sm-4 ourServices">
					<div class="services_box">
							<p id="serv">Burst Geysers</p>
							<p class="service_details">
							We specialize in installing Geysers. We keep up-to-date with all the latest rules and regulations regarding the installations and maintenance of geysers
							</p>
							<div class="bottom_services"></div>
           </div>
				</div>
			  <div class="col-lg-4 col-md-4 col-sm-4 ourServices">
				<div class="services_box">
						<p id="serv">PVC Gutter</p>
						<p class="service_details">
						Wesley's Plumbing Gutter Systems has built a sound reputation with regard to technical performance, ease of installation and low maintenance.
						</p>
						<div class="bottom_services"></div>
        </div>
				</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 ourServices">
			   <div class="services_box">
						<p id="serv">Water Proofing</p>
						<p class="service_details">
						Our products address a range of needs and emphasize a particular solution. Water proofing is one our specialisation, We are well placed to do it for you.
						</p>
						<div class="bottom_services"></div>
				</div>
        </div>
			</div>
		</div>
	</section>
	
	<section>
	<div class="container">
	 <div class="container-row">
	 <div class="col-lg-4 col-md-4 col-sm-4 ourServices">
			<div class="services_box">
					<p id="serv">Drain Layer</p>
					<p class="service_details">
							Effective and correctly installed drainage systems play an important role in protecting public health and maintaining a pollution-free environment. 
							</p>
							<div class="bottom_services"></div>
						</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 ourServices">
				<div class="services_box">
					<p id="serv">Drain Cleaning</p>
					<p class="service_details">
					Wesley's Plumbing pride themselves in leaving your drains unblocked, clean and ready for use.  We repair and replace damaged and blocked drains. Just call us for a quote.
					</p>
					<div class="bottom_services"></div>
				</div>
				</div>
			<div class="col-lg-4 col-md-4 col-sm-4 ourServices">
			<div class="services_box">
					<p id="serv">Plumbing</p>
					<p class="service_details">
					Do you have any problems with your plumbing? Our trained & experienced team will do exactly what you looking for and go beyond your expetations.
					</p>
					<div class="bottom_services"></div>
				</div>
		</div>
			</div>
	</div>
	</section>


	<section>
			<div class="container">
				<div class="col-lg-4 col-md-4 col-sm-4 ourServices">
				<div class="services_box">
					<p id="serv">Bathroom Renovations</p>
					<p class="service_details">
					Do you need to renovate your bathroom ? Do you need your bathroom renewed ? With our expertise, you will be amazed with the final product.
					</p>
					<div class="bottom_services"></div>
				</div>
		</div>
				<div class="container-row">
				<div class="col-lg-4 col-md-4 col-sm-4 ourServices">
					<div class="services_box">
							<p id="serv">Minor Building Elterations</p>
							<p class="service_details">
								At wesleys we have a  trained & <br>experienced team will do exactly<br> what you looking for and go beyond your expetations.
							</p>
							<div class="bottom_services"></div>
					</div>
		</div>	
				<div class="col-lg-4 col-md-4 col-sm-4 ourServices">
					<div class="services_box">
				<p id="serv">Tiling</p>
				<p class="service_details">
				Wesley's Plumbing Consulting has a <br>team that specialises in both floor and wall tiling. Our work is flawless.Call Us today and get it done!
				</p>
				<div class="bottom_services"></div>
		</div>
				</div>
				</div>
				
			</div>
</section>
	
    <!-- Content -->
    <!-- Footer -->
      <?php 
					include('footer.php');
					?>
   <script type="text/javascript">
   	$(document).ready(function(){
   		$(".ourServices").on('hover', function(){
            $("#serv").css("color","white");
   		});
   	})
   </script>