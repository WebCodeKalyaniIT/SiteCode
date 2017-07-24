<!DOCTYPE html>
<html lang="en">
	
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Numeric | Blogs </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/breadcrumbs.css" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 


<script>
var showDropDown = function(doc){
var id = doc.id;
$("#"+id+" .submenu").show();
$('.navbar-nav > li').css("width", "120px");
}
var hideDropDown = function(doc){
var id = doc.id;
$("#"+id+" .submenu").hide();
}
</script>

<script type='text/javascript'>
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>

</head>
		<body>	
<?php
	include 'header.php';
?>		
 
 
       <div style="background-image: url('img/blogs1.jpg');background-size: cover;height:auto !important; ">
        <div class="container">
            <div class="row">
			<div class="col-md-12">
			<br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br>
			</div>
			</div>
        </div>
    </div>

	 <section class="hdng1">
		<div class="container">
 
		<div class="row">
		<div class="col-md-12">
				<h1>Blogs</h1>
			</div>
            <div class="col-md-12">
				<p>
					Numeric Technology's personal online journal with logs on the latest and the most used tech by our engineers. We believe in sharing knowledge and making the whole community more wiser. This is Numeric's one-stop solution for all the upcoming technologies.
				</p>
		</div>
			<div class="col-md-12">
				<div class="row text-center">
				
				<a href="BI/rent-all-with-powerbi.php" class="portfolio-link">
					<div class="col-md-6 hoverstyle standout wow fadeInLeft animated">
							<div style="margin-top:30px;background-size: auto;"><img src="img/blogtest1.1.png"></div>
						<br><br><br>
						<h4 class="service-heading" style="color:#008cda">RentAll with Power BI</h4>
						<p class="text-muted">
							Real Estate has a new definition, gone are the days where one had to get on the street, work up his day through number of properties listed in an Ad paper and choose one. It’s the 21st Century and the Real Estate market has met a new world, the Virtual one. We at Numeric, provide the near absolution of narrowing the Real-time experience and Virtual experience of choosing a Property...<span style="color:#008cda"><i>Read More</i></span>
						</p>
 					</div>
				</a>
			<!--Remaining blogs commented out for now-->	
				<!--a href="leadership.php" class="portfolio-link">
					<div class="col-md-3 hoverstyle standout wow fadeInLeft animated">
						
							<div style="margin-top:30px;background-size: auto;"><img src="img/blogtest2.1.png"></div>
						<br><br><br>
						<h4 class="service-heading" style="color:#008cda">NetWeaver Analysis</h4>
						<p class="text-muted">
							Analysis for Office reports can be saved on BI platform and SAP NetWeaver Platform. Saving on NetWeaver platform requires few prerequisites to be taken care of; one important thing is to have an Analysis Service created. This can prevent from facing the below error:...<span style="color:#008cda"><i>Read More</i></span>
					 </p>
 					</div>
				</a>
				<a href="advantage.php" class="portfolio-link">
					<div class="col-md-3 hoverstyle standout wow fadeInLeft animated">
						
							<div style="margin-top:30px;background-size: auto;"><img src="img/blogtest3.1.png"></div>
						<br><br><br>
						<h4 class="service-heading" style="color:#008cda">SAP Design Studio</h4>
						<p class="text-muted">
							In this blog we talk about how one can develop a tornado chart in SAP Design Studio / Lumira Designer. The Tornado chart, also known as the Butterfly Chart is a modified version of the Bar chart. It is often used for sensitivity analysis, where the relative...<span style="color:#008cda"><i>Read More</i></span>
							
						</p>
 					</div>
				</a-->
				
		</div>
		
		</div>
		
		</div>
			</div>
</section>

<?php
		include 'footer.php';
	?>
	


   <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
	<script>
	var modal = document.getElementById('career-myModal');

	var btn = document.getElementById("myBtn");

	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function() {
		modal.style.display = "block";
	}

	span.onclick = function() {
		modal.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>
</html>