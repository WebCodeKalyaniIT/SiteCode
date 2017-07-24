<!DOCTYPE html>
<html lang="en">
	
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kalyani IT | Automobiles</title>

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
<section>
<div class="container">
<ol class="breadcrumb breadcrumb-arrow">
				<li><a href="index.php">HOME</a></li>
				
				<li class="active">AUTOMOBILES</li>
			</ol>
                <div class="row">
                    <div class="col-lg-12">
                       
                            <!-- Project Details Go Here -->
                            <div class="col-md-12"><br>
									<h3>AUTOMOBILES</h3> <br>
									<img src="img/automobile.png">
									 <div class="spacer-30"></div>
									<h4 class="service-heading">Kalyani IT TECHNOLOGIES: EMPOWERING BUSINESS</h4>
									<p>Kalyani IT is a global consulting company focused on niche areas of expertise in order to provide execution excellence and customer satisfaction through a unique blend of price, performance and quality. We invest in our clients to understand their requirements, allowing us to provide successful project implementation and/or resource placement to our customers' satisfaction.</p>
									 <div class="spacer-20"></div>
									<h4 class="service-heading">OUR GLOBAL CAPABILITIES, EXPERIENCE & SCALABILITY</h4>
									<p>Kalyani IT has over 300 consultants worldwide, including over 200 in US/Canada and 100 in off-shore centers. We provide specialized, "right fit" resources that are ready on day one. Our consultants are professional, courteous and highly experienced. The majority of our consultants have an average of 15+ years of business experience, and at least 12+ years of ERP consulting experience.</p>
									 <div class="spacer-20"></div>
									<h4 class="service-heading">OUR CONSULTING STRATEGY - WE VALUE OUR PEOPLE</h4>
									<p>Kalyani IT maintains a large pool of consulting resources that can be mobilized on demand. Kalyani IT ensures shadow resourcing across key areas, mitigating the risk of unforeseen staff changes. Internally, we provide extensive training for our consultants and compensate them some of the best rates in the industry. As a result, we enjoy a near perfect retention record.</p>
									 <div class="spacer-20"></div>
									<h4 class="service-heading">PERFORMANCE AND QUALITY, AT COMPETITIVE PRICES</h4>
									<p>Kalyani IT maximizes service offerings for our customers by adapting to our clients' budget and time constraints in order to deliver the best services and solutions in the most timely and cost effective manner possible. Our low overhead, and flexible engagement model allows us to keep our costs low, as we pass these savings on to our valued clients.</p>
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