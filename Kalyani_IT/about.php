<!DOCTYPE html>
<html lang="en">
	
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kalyani | About</title>

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
 

 
<div class="breadcrumb-wrapper">
	<div class="container">
	<ol class="breadcrumb">
        <li><span><span typeof="v:Breadcrumb">
		<a href="index.php">Home</a> » <span rel="v:child" typeof="v:Breadcrumb">
		<span class="breadcrumb_last">About</span></span></span></span>
		</li>
    </ol>
	</div>
</div>

<section class="hdng">
	<div class="container">
 
		<div class="row">
		<div class="col-md-12">
				<h1>About</h1>
			</div>
			<div class="col-md-12">
				<p>
					<b>Our Mission Statement</b>
<br/><br/>
Our Mission is to enable our clients to become agile, high performing organizations through our consistent delivery
of cost effective, quality performance. Our motto "Excellence in Price, Performance & Quality".
				</p>
		</div>
		</div>
		
		<div class="row text-center">
				
				<a href="overview.php" class="portfolio-link">
					<div class="col-md-12 hoverstyle standout wow fadeInLeft animated">
						<span class="fa-stack fa-4x">
							<div><img src="img/overview_icon.png"></div>
						</span>
						<h4 class="service-heading">Kalyani Overview</h4>
						<p class="text-muted">
							Kalyani Technologies provides Enterprise Solutions with a prime focus on ERP, Big-Data, Dashboard & Analytics, E-Commerce, 
							Staff Augmentation and related technologies. We have built the company with an emphasis on efficient processes and "Best 
							Practice" methodologies that enables us to deliver high quality projects and resources to our clients. Our strong customer 
							partnerships are based on our understanding of client needs, while our timely, 
							reliable assistance and strong collaboration has allowed us to grow and serve our customers well.
						</p>
 					</div>
				</a>
				<a href="leadership.php" class="portfolio-link">
					<div class="col-md-12 hoverstyle standout wow fadeInLeft animated">
						<span class="fa-stack fa-4x">
							<div><img src="img/leadership_icon.png"></div>
						</span>
						<h4 class="service-heading">Kalyani Leadership</h4>
						<p class="text-muted">
							If a leader has a strong vision, little set backs and obstacles will seem small and / or insignificant. They will work 
							through them and persevere to the end, learning as they go. Vision helps leaders to persevere. 
							At Kalyani we are lucky to have the most visionary leadership.
					 </p>
 					</div>
				</a>
				<a href="advantage.php" class="portfolio-link">
					<div class="col-md-12 hoverstyle standout wow fadeInLeft animated">
						<span class="fa-stack fa-4x">
							<div><img src="img/advantage_icon.png"></div>
						</span>
						<h4 class="service-heading">Kalyani Advantage</h4>
						<p class="text-muted">
							"Our results were only possible because of Kalyani.. With any other tool our strategies wouldn't 
							have worked, because it wouldn't have been possible to attach NPS scores of individual users in 
							the way that we needed." 
<br/><br/>
Head of Growth Marketing, Maufacturing Industry.
							
						</p>
 					</div>
				</a>
				
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