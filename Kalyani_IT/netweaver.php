<!DOCTYPE html>
<html lang="en">
	
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kalyani IT | NetWeaver</title>

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
		<a href="sap.php">SAP</a> » 
		<span class="breadcrumb_last">NetWeaver</span></span></span></span>
		</li>
    </ol>
	</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="inpage_txt" id="sh-li">
				
				<div class="col-sm-12 pt">
				<div class="col-md-3">
					<img src="img/sap-partner1.png" class="img-responsive" alt="" />
				</div>
				<div class="col-md-9">
				<h2>NetWeaver</h2>
				<br/><br/>
				<div class="col-md-12">
				<p>
					 SAP NetWeaver is the primary platform that serves as the technical foundation of SAP’s business technology products and business software. It is an open technology, offering a wide array of opportunities for companies to utilize technology for mission-critical business cases.
<br><br>
The benefit of using SAP software is to integrate the workforce, business processes and information, so that the entire enterprise can run on a shared platform. NetWeaver empowers this platform, and its systems, by providing service provision, composition, consumption, and governance.
				</p>
				</div> 
				</div>
				</div>
				  
				<div class="col-sm-12 pt">
				<div class="col-md-8 col-sm-12">
					 <p>
					 NetWeaver can be used to develop and integrate applications and systems. Many companies also take advantage of the flexibility of the NetWeaver platform to extend their
					 enterprise systems with Microsoft .Net, JAVA, IBM WebSphere and various other technology tools.
					 </p>					
				</div>
				<div class="col-md-4 col-sm-12">
					<img src="img/netwe_img1.jpg" />
				</div>
				</div>
				
					  
			</div>
		</div>
	</div>
 
<br><br>
<!-- about_section -->
<section id="num_abt">
  <div class="container">
    <div class="row wow fadeInDown animated" style="visibility: visible;">
      <div class="col-xs-12 text-center">
        <h2>Let's talk about SAP<sup>®</sup></h2>
      </div>
	<div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
        <p class="lead">
          Start with a free high-level consultation to help you clearly understand the costs, and benefits of fully 
		  leveraging SAP<sup>®</sup> for your company.
        </p>
        <a href="rdemo.php" class="main-btn">Request Demo</a>
      </div>
    </div>
  </div>
</section>
<!-- about_section -->


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