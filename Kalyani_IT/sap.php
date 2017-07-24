 <!DOCTYPE html>
<html lang="en">
	
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kalyani | SAP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
	 <link href="css/breadcrumbs.css" rel="stylesheet">
    <link href="css/tabs.css" rel="stylesheet">
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
<script>
			$(document).ready(function(){

				$(".filter-button").click(function(){
					var value = $(this).attr('data-filter');
					
					if(value == "all")
					{
						//$('.filter').removeClass('hidden');
						$('.filter').show('1000');
					}
					else
					{
			//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
			//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
						$(".filter").not('.'+value).hide('3000');
						$('.filter').filter('.'+value).show('3000');
						
					}
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
		<a href="sap.php">Services</a> » 
		<span class="breadcrumb_last">SAP</span></span></span></span>
		</li>
    </ol>
	</div>
	</div>
		<section class="hdng">
		<div class="container">
 
		<div class="row">
		<div class="col-md-12">
				<h1>SAP</h1>
			</div>
			<div class="col-md-12">
				<p>
					Take advantage of the latest in SAP® technology to drive improvement for your business. 
					Kalyani Technologies is an innovative leader in SAP® solution offerings and an 
					expert in leveraging them to drive business processes improvement and company growth.
				</p>
		</div>
		</div>
		
		<div class="row">
			<div class="N-main-menu">
				<div align="center">
					<button class="btn btn-default filter-button active btn-menu" data-filter="all">All</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="hana">SAP HANA</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="finance">Finance</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="retail">Retail</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="analytics">Analytics</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="manufacturing">Manufacturing</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="tech">Technology</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="fashion">Fashion</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="procurement">Procurement</button>
					<button class="btn btn-default filter-button btn-menu" data-filter="supply">Supply Chain</button>
				</div>
			</div>
			<br/>
			<div class="clearfix effects" id="effect-5">
				
				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hana">
					<div class="img">
						<img src="img/saphana_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="saphana.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img" />
					<h5 class="item-title n-text">
						<a href="saphana.php" title="">SAP HANA<sup>®</sup> Platform</a>
					</h5>
					  <span>SAP HANA</span>
				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter retail">
					<!--img src="http://fakeimg.pl/365x365/" class="img-responsive"-->
					<div class="img">
						<img src="img/retail_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="retail.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="retail.php" title="">Retail</a>
					</h5>
					  <span>Retail</span>
				</div>
				

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter ">
					<!--img src="http://fakeimg.pl/365x365/" class="img-responsive"-->
					<div class="img">
						<img src="img/ecc_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="ecc.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="ecc.php" title="">ECC 6.0</a>
					</h5>
					  <span>All</span>

				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter analytics">
					<!--img src="http://fakeimg.pl/365x365/" class="img-responsive"-->
					<div class="img">
						<img src="img/businesintel_img.png" width="100%" height="100%" class="img-responsive">
						<div class="overlay">
							<!--a href="#" class="expand">+</a-->
							<a href="businessin.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="businessin.php" title="">Business Intelligence</a>
					</h5>
					  <span>Analytics</span>
				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter manufacturing">
					<div class="img">
						<img src="img/mii_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="mii.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="mii.php" title="">MII</a>
					</h5>
					<span>Manufacturing</span>

				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter tech">
					<div class="img">
						<img src="img/basis_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="basisand.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="basisand.php" title="">Basis and Security</a>
					</h5>
					 <span>Technology Services</span>
				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter supply">
					<div class="img">
						<img src="img/cmr_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="crm.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
							<h5 class="item-title n-text">
						<a href="crm.php" title="">CRM</a>
					</h5>
					<span>Supply Chain</span>
				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter tech">
					<div class="img">
						<img src="img/netwe_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="netweaver.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					
					<h5 class="item-title n-text">
						<a href="netweaver.php" title="">NetWeaver</a>
					</h5>
					 <span>Technology Services</span>
				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter supply">
					<div class="img">
						<img src="img/scm_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="scm.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="scm.php" title="">SCM</a>
					</h5>
					  <span>Supply Chain</span>
				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter tech">
					<div class="img">
						<img src="img/sapgrc_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="sapgrc.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="sapgrc.php" title="">SAP GRC</a>
					</h5>
					<span>Technology Services</span>
				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter procurement">
					<div class="img">
						<img src="img/accountspay_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="accountpay.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="accountpay.php" title="">Procurement and Accounts Payable</a>
					</h5>
					<span>Procurement Transformation</span>

				</div>

				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter finance">
					<div class="img">
						<img src="img/fscm_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="fscm.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="fscm.php" title="">FSCM</a>
					</h5>
					 <span>Finance</span>
				</div>
				
				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter tech">
					<div class="img">
						<img src="img/sapfiori_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="fiori.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="fiori.php" title="">SAP Fiori</a>
					</h5>
					 <span>Technology Services</span>
				</div>
				<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter fashion">
					<div class="img">
						<img src="img/sapfms_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="fms.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="fms.php" title="">SAP FMS</a>
					</h5>
					<span>Fashion</span>
				</div>
				<!--<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter tech">
					<div class="img">
						<img src="img/webmethods_img.png" width="100%" height="100%" alt="" class="img-responsive">
						<div class=" overlay">
							<a href="webmethods.php" class="expand glyphicon glyphicon-search"></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
					<img src="img/tabimg.png" class="sm-img">
					<h5 class="item-title n-text">
						<a href="webmethods.php" title="">WebMethods </a>
					</h5>
					 <span>Technology Services</span>
				</div>-->
				 
			</div>
		</div>
		
	</div>
</section>
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
<!-----------------classification script------------------>
<script>
		$(document).ready(function(){
			if (Modernizr.touch) {
				// show the close overlay button
				$(".close-overlay").removeClass("hidden");
				// handle the adding of hover class when clicked
				$(".img").click(function(e){
					if (!$(this).hasClass("hover")) {
						$(this).addClass("hover");
					}
				});
				// handle the closing of the overlay
				$(".close-overlay").click(function(e){
					e.preventDefault();
					e.stopPropagation();
					if ($(this).closest(".img").hasClass("hover")) {
						$(this).closest(".img").removeClass("hover");
					}
				});
			} else {
				// handle the mouseenter functionality
				$(".img").mouseenter(function(){
					$(this).addClass("hover");
				})
				// handle the mouseleave functionality
				.mouseleave(function(){
					$(this).removeClass("hover");
				});
			}
		});
	</script>
	<script src="js/modernizr.js"></script>
<!-----------------classification script------------------>


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