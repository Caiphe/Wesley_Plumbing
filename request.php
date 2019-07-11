<?php include('header.php'); ?>
	<title>Request</title>
	<link rel="stylesheet" type="text/css" href="css/request.css">
<style type="text/css">
	.paraxify {
    background: url(img/parax.jpg) no-repeat;
    background-attachment: fixed;
    background-position: center center;
    background-size: cover;
	  height:400px;
}

</style>
<body class="paraxify">
	<section class="mainSec">
		<article>
			<div class="flex1">
				<p class="requestTitle">REQUEST QUOTE</p>
			 <form>
			 	<input type="text" name="Name" class="form-control" placeholder="Name">
			 	<input type="number" name="contact" class="form-control" placeholder="Contact Number">
			 	<select class="jobNature" class="form-control">
			 		<option value="">Select Service</option>
			 		<option value="Plumbing">Plumbing</option>
			 		<option value="Plumbing">Drain Layers</option>
			 		<option value="Bathroom">Bathrooms</option>
			 		<option value="Other">Other</option>
			 	</select>
			 	<input type="text" name="date" class="form-control" placeholder="DD-MM-YYYY">
			 	<input type="text" name="address" class="form-control" placeholder="Address">
			 	<input type="text" name="area" class="form-control" placeholder="Area">
			 	<input type="text" name="code" class="form-control" placeholder="Zip Code">
			 	<div class="row">
			 		<div class="col-md-6"><button class="" type="submit" id="btnSubmit"><i class="ionicon ion-log-in"></i> SUBMIT</button></div>
			 		<div class="col-md-6"><button class="" type="reset" id="btnReset"><i class="ionicon ion-ios-plus"></i> Reset</button></div>
			 	</div>
			 </form>
			 <p class="downloadLink"><a href="#">Download the form <i class="ionicon ion-ios-download-outline"></i></a></p>
		</div>
		</article>
		<article>
			<div class="flex2">
			   
		  </div>
		</article>
	</section>

</body>
<?php 
		include('footer.php');
?>
<script type="text/javascript">
   	myParaxify = paraxify('.paraxify');
</script>