<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Autoplay usage demo">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kalyani</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/circle.css" type="text/css" media="screen" />
	 
	
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="screen" />
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" />
	
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.circliful.css">
	
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Montserrat|Open+Sans|Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/owl.theme.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/docs.theme.min.css" type="text/css" media="screen" />
	
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
 
<script>
    function initialize()
    {
      var mapProp = {
        center: new google.maps.LatLng(17.4401,78.3489),
        zoom:7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

    function loadScript()
    {
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "http://maps.googleapis.com/maps/api/js?key=&sensor=false&callback=initialize";
      document.body.appendChild(script);
    }

    window.onload = loadScript;
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

<body id="page-top" class="index aboutus services industry">
<?php
   include 'header.php';
?>
    
	<!-- popup>
	<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" type="button" class="close-button" data-dismiss="modal" aria-hidden="true"></a>
            </div>
            <div class="modal-body">
				<img src="img/popup_img.jpg" alt="" class="img-responsive">
            </div>
        </div>
    </div>
	</div>
	
	<div class="clearfix"></div>
	<popup -->
	
	<!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text" style="height:200px !important; ">
               <div class="col-xs-10">   
				<div class="masthead">
				<span>Best run businesses run SAP<sup>&#174;</sup></span>
				<br/>
				<span>Kalyani makes it run better!</span>
				</div>
                 </div>
            </div>
        </div>
    </header>
        <!--section>
       <div>
        <div class="row ">
				<div class="col-md-12">
		  			<div class='text-center'>
			    		<h2 class="title"><span>We are live at SAPPHIRE</span></h2>
			    	</div>
		  		</div>
            </div>
    <div class="embed-container" style="position: relative; padding-bottom: 56.25%; height: 0;"><iframe src="http://events.sap.com/sapandasug/en/embed.aspx?cid=2237&showchannels=off&autoplay=off" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" scrolling="no" frameborder="0" allowfullscreen="true"></iframe>
            </div>
        </div>
    
    </section-->
	<div class="clearfix"></div>
	<!-- Services Section -->
    <section id="sap" class="n-ser">
        <div class="container">
            <div class="row ">
				<div class="col-md-12">
		  			<div class='text-center'>
			    		<h2 class="title"><span>SAP</span></h2>
			    	</div>
		  		</div>
            </div>
            <div class="row text-center">
				<a href="retail.php" class="portfolio-link">
					<div class="col-md-4 hoverstyle standout wow fadeInLeft animated">
						<span class="fa-stack fa-4x">
							<div><img src="img/retail_icon.jpg"></div>
						</span>
						<h4 class="service-heading">Retail</h4>
						<p class="text-muted">SAP Retails<sup>&#174;</sup>
						 is a completely integrated retailing system  providing all the functions necessary for 
						 modelling business processes in a retail company
						</p>
 					</div>
				</a>
				<a href="fms.php" class="portfolio-link">
					<div class="col-md-4 hoverstyle standout wow fadeInLeft animated">
						<span class="fa-stack fa-4x">
							<div><img src="img/fashion_icon.jpg"></div>
						</span>
						<h4 class="service-heading">Fashion</h4>
						<p class="text-muted">SAP Fashion<sup>&#174;</sup>
						 Management provides a comprehensive solution for fashion companies to:  
						break down barriers and inefficiencies across sales channels,
						</p>
					</div>
				</a>
				<a href="fiori.php" class="portfolio-link">
					<div class="col-md-4 hoverstyle standout wow fadeInRight animated">
						<span class="fa-stack fa-4x">
							 <div><img src="img/fiori_icon.jpg"></div>
						</span>
						<h4 class="service-heading">Fiori</h4>
						<p class="text-muted">SAP Fiori<sup>&#174;</sup>
						is a collection of Web applications that are designed to be multichannel:  both desktop and mobile browser.
						</p>
					</div>
				</a>
            </div>
			
        <div style="text-align:center;margin-top:30px;">
			<a href="rdemo.php" type="submit" class="btn btn-sm btn-demo" >Request Demo</a>
			<a href="sap.php" type="submit" class="btn btn-sm btn-demo" >Readmore</a>
		</div>
        </div>
    </section>
    <!-- Services Section End -->
	 
	<div class="clearfix"></div>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="startdriv_bg" >
        <div class="container">
		 
            <div class="row text-center">
			 <p style="color:#fff;font-size:30px;">Cutting customer churn in half, along with a 10x increase in ROI</p>
            </div>
			<br><br>
			<div class="row">
				<div class="col-md-4">
					<div class="circle">
						<div id="test-circle"></div>
						<p>Less Churn</p>
					</div>
					
				</div>
				<div class="col-md-6 txt_rgt">
					<p>
						"Kalyani technologies implementation of Solution to Our Business is extremely competent and then beat our prior partner performance with a 49% increase in revenue. The speed and ease of implementation, coupled with their ownership of the project, delivering timely integration and stellar results. I am very excited to continue working with them."
						<br/><br/>
						<!--b>Guillaume Cabane</b--><br/>
						Head of Growth Marketing, Manufacturing.
								
					</p>
				</div>
			</div> 
        </div>
    </section>
	
	
	<div class="clearfix"></div>
	<!-- Services Section -->
    <section id="services" class="n-ser" >
        <div class="container">
            <div class="row ">
				<div class="col-md-12">
		  			<div class='text-center'>
			    		<h2 class="title"><span>Services</span></h2>
			    	</div>
		  		</div>
            </div>
            <div class="row text-center">
				<a href="enterprise.php" class="portfolio-link">
					<div class="col-md-4 hoverstyle standout wow fadeInLeft animated">
						<span class="fa-stack fa-4x">
							<!--i class="fa fa-circle fa-stack-2x text-primary"></i-->
							   
							<div><img src="img/icon-1.png"></div>
							
						</span>
						<h4 class="service-heading">ENTERPRISE SOLUTIONS</h4>
						<p class="text-muted">Kalyani offers Global Enterprise Application Solutions including <b>SAP, ORACLE</b> & others</p>
						<!--<button type="submit" class="btn btn-sm n-lnbtn" href="enterprise.php">Learn More...</button>-->
					</div>
				</a>
				<a href="sap.php" class="portfolio-link">
					<div class="col-md-4 hoverstyle standout wow fadeInLeft animated">
						<span class="fa-stack fa-4x">
							<!--i class="fa fa-circle fa-stack-2x text-primary"></i-->
							<div><img src="img/icon-2.png"></div>
						</span>
						<h4 class="service-heading">SAP</h4>
						<p class="text-muted">“Take Advantage Of The Latest In SAP® Technology To Drive Improvement For Your Business. Kalyani Technologies Is An Innovative Leader In SAP® Solution Offerings And An Expert In Leveraging Them To Drive Business Processes Improvement And Company Growth.”</p>
					  <!--<button type="submit" class="btn btn-sm n-lnbtn"  href="sap.php">Learn More...</button>-->
					</div>
				</a>
				<a href="dashboards.php" class="portfolio-link">
					<div class="col-md-4 hoverstyle standout wow fadeInRight animated">
						<span class="fa-stack fa-4x">
						   <!--i class="fa fa-circle fa-stack-2x text-primary"></i-->
							 <div><img src="img/icon-3.png"></div>
							 <!--i class="fa fa-tachometer" aria-hidden="true"></i-->
						</span>
						<h4 class="service-heading">DIGITAL DASHBOARD</h4>
						<p class="text-muted">Kalyani is the industry leader in <b>Dashboards</b> providing solutions in <b>Design Studio, Tableau, Lumira </b>& Qlikview.</p>
					   <!--<button type="submit" class="btn btn-sm n-lnbtn" href="dashboards.php">Learn More...</button>-->
					</div>
				</a>
            </div>
			
        <div style="text-align:center;margin-top:30px;">
			<a href="rdemo.php" type="submit" class="btn btn-sm btn-demo" >Request Demo</a>
		</div>
        </div>
    </section>
    <!-- Services Section End -->
 
	<div class="clearfix"></div>
    <!-- Contact Section -->
    <section id="contact" style="background-color: #f3f3f3 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 standout wow fadeInUp animated">
		  			<div class='text-center'>
			    		<h2 class="title "><span style="background:#f3f3f3;">Contact</span></h2>
			    	</div>
		  		</div>
            </div>
            <div class="row">
              
                <div class="col-md-9">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2973.8448274029874!2d-88.16059208564144!3d41.81010307764765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e5617561e8419%3A0x64f6fafe2c6ff724!2s4200+Cantera+Dr+%23100%2C+Warrenville%2C+IL+60555%2C+USA!5e0!3m2!1sen!2sin!4v1484224818405" width="700" height="350" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>
				</div>
                <!--div class="col-md-3" style="color: white;">
                    <h5>4200 CANTERA DR SUITE 100</h5>
                    <h5>WARRENVILLE, IL 60555</h5>
					<p><span>Email : </span><a href="#" style="color:#333">info@numerictech.com</a></p>
                    <p>Phone : +1 630.955.9060</p>
                    <p>Fax : +1 630 604.2006</p>
                    <p><span>Online : </span><a href="http://numerictech.com/" style="color:#333">www.numerictech.com</a></p>
					
                </div-->
               <div class="contactboxhead">Corporate HeadQuarters</div>
<div style="margin:10px;"><I><B>Kalyani Tech</I></B><br />
      4200 CANTERA DR SUITE 100, WARRENVILLE, IL 60555<br />
   <span>Email : </span><a href="#" style="color:#56c3f9">info@numerictech.com</a>
                    <br>Phone : +1 630.955.9060<br>
                    Fax : +1 630 604.2006
      </div>
            <div class="contactboxhead"><I><B>India</I></B></div>
       Q-city, 8th Floor,Nanakramguda ,<br />
      Gachibowli,Hyderabad,Telangana-500032<br>
   Phone : 040-23004498
   </div>
            </div>
        </div>
    </section>
	<?php
		include 'footer.php';
	?>
	 <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>


 
	

	
<script src="js/wow.min.js"></script>
 <script>
   new WOW().init();
</script>	
	
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

<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
         items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});
</script>	
	
	    <!-- vendors -->
    <script src="../assets/vendors/highlight.js"></script>
    <script src="../assets/js/app.js"></script>
	
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
	<script src="js/scripts.js"></script>
	 
<script src="js/jquery.circliful.js"></script>
<script>
    $( document ).ready(function() { // 6,32 5,38 2,34
        $("#test-circle").circliful({
            animation:1,
            animationStep:1,
            foregroundBorderWidth:2,
            backgroundBorderWidth:2,
            percent:49,
            textSize:50,
            textStyle: 'font-size:14px;',
            textColor: '#fff',
			backgroundColor:'#96eaff',
            multiPercentage:11,
            percentages: [10, 20, 30]
        });
 
    });

</script>




<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<a class="scroll-to-top hidden-mobile visible" href="javascript:void(0);"><i class="fa fa-chevron-up"></i></a> 
<script>
$(document).ready(function(e) {
   $('.cust-close').click(function(){
	   $('.cust-pop').fadeOut();
   })
});
</script>
</body>
</html>
