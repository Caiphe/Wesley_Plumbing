<!Doctype html>
<html lang="en" class="no-js">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<style>
#myBtn 
{
  display: none;
  position: fixed;
  bottom: 40px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color : #1385BB;
  color: #fff;
  font-weight: bolder;
  cursor: pointer;
  padding: 15px;
  font-size: 18px;
  width: 45px;
  height: 55px;
  border-radius: 10%;
  box-shadow: -1px 2px 3px 0px rgba(0,0,0,0.75);
  -webkit-box-shadow: -1px 2px 3px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: -1px 2px 3px 0px rgba(0,0,0,0.75);
  transition: 1s;
  
}
#myBtn:hover 
{
  background-color: #F5BC08;
  font-weight: bold;
  color: #ffffff;
}
</style>
</head>
<button onclick="topFunction()" id="myBtn" title="Go to top" class="back-to-top"><i class="icon ion-chevron-up" aria-hidden="true"></i></button>
<div style=""></div>
<script type="text/javascript">
  $(document).ready(function() {
    var offset = 200;
    var duration = 700;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(duration);
        } else {
            $('.back-to-top').fadeOut(duration);
        }
    });
    $('.back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});

</script>
<script >
  /*
   $(document).ready(function(e){
      $("#searchtextBox").keyup(function(){
        
        var text = $("#searchtextBox").val();
        if(text != '')
        {
          $.ajax({
          method : 'GET',
          url :'fetchCompany.php',
          data : 'txt=' + text,
          dataType ="text",
          success: function(data){
            $("#results").html(data);
          }
        });
       }
        else
        {
          $('#results').html('');
        }
      })
   });*/
 </script>