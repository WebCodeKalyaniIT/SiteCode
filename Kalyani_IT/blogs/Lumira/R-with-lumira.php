<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Numeric | SAP LUMIRA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../css/agency.css" rel="stylesheet">
    <link href="../../css/breadcrumbs.css" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png">
    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
	include '../header.php';
?>		
 
 <div class="breadcrumb-wrapper">
	<div class="container">
	<ol class="breadcrumb">
        <li><span><span typeof="v:Breadcrumb">
		<a href="index.php">Home</a> » <span rel="v:child" typeof="v:Breadcrumb">
		<a href="blogs.php">Blogs</a> » 
		<span class="breadcrumb_last">R with Lumira</span></span></span></span>
		</li>
    </ol>
	</div>
	</div>

	<!-- <section class="hdng">
		<div style="border-right:medium #CC0000 solid; height:300px;" class="container">
 
		<div class="row">
		  <div class="col-md-12 webimg">
				
				</div>
			
            <div class="col-md-12">
				<h1>Two Sigma Connect: Rental Listing Inquiries</h1>
			</div>
            
            <div class="col-md-12">
				
				   <h2>Predicting the New York Tenants interests on new rental listing with Rent Hop.com </h2>
				
<br><br>
                 <ol>
                   <li><strong>Overview:</strong></li>
                 </ol> 
<br><br>
                  <p>Rent Hop makes apartment search smarter by using data to sort rental listings by quality. Two Sigma and Rent Hop, a portfolio company of Two Sigma Ventures wanted to predict the number of inquiries a new listing receives based on the listing’s creation date and other features. Doing so will help Rent Hop better handle fraud control, identify potential listing quality issues, and allow owners and agents to better understand renters’ needs and preferences</p>
<br><br>
               <ol>
                   <li><strong>Data Introduction:</strong></li>
                 </ol> 
<br><br>
       
               
              <p>We will predict how popular an apartment rental listing is based on the listing content like text description, photos, number of bedrooms, price, etc. The data comes from renthop.com an apartment listing website. These apartments are located in New York City.The target variable, interest level, is defined by the number of inquiries a listing has in the duration that the listing was live on the site</p>  
		<br><br>
		
                 <ol>
                   <li><strong>Numeric Predictive Solution:</strong></li>
                 </ol> 
                 <P>We have chosen R language for Prediction on interest level, so in our analysis we considered,
Test and Train tables which are of JSON format.
Train dataset is useful for our model prediction where we train our model for prediction,
Here model suggests algorithm used for prediction.
Test is the table where we have to find out interest level by individual fields HIGH, MEDIUM, LOW. 
To go further we have to consider fields which are in our Test dataset, by default both Test and Train datasets are having same fields.
From the data fields section of our Train data we will look at mostly on features field which will decide the customers interest so we split the sentence in to individual words for our model convenient and for our visualization to.
We use an algorithm called XGB where it is useful for performance (Running in low time) and another algorithm called Prediction for predicting our model.
After having done with our XGB & Prediction algorithms it gives the predicted data based on listing id with in less time of around 0.55982 seconds.
Based on listing id we are going to have our model generated which is shown below
</P>
				 </div>

		
		
			</div>
			

    <!-- .entry (end) -->
    
    <!-- Page Navi -->
 <!-- </div>
 
</div>

</section>-->

<div class="container">
 
                <div class="row">
                    <div class="col-lg-12">
                  
                            <!-- Project Details Go Here -->
                            <div class="col-md-12"><br>
								<h2 class="section-heading">Two Sigma Connect: Rental Listing Inquiries</h2><br> 
								<!--<img src="img/bigdata.png">-->
								 <div class="spacer-30"></div>
								<h4 class="service-heading">Predicting the New York Tenants interests on new rental listing with Rent Hop.com</h4>
								<br>
								<h4 class="service-heading">Overview:</h4>
								<p>Rent Hop makes apartment search smarter by using data to sort rental listings by quality. Two Sigma and Rent Hop, a portfolio company of Two Sigma Ventures wanted to predict the number of inquiries a new listing receives based on the listing’s creation date and other features. Doing so will help Rent Hop better handle fraud control, identify potential listing quality issues, and allow owners and agents to better understand renters’ needs and preferences.</p>
								<br><br>
								<h4 class="service-heading">Data Introduction:</h4>
								
								
								<p>We will predict how popular an apartment rental listing is based on the listing content like text description, photos, number of bedrooms, price, etc. The data comes from renthop.com an apartment listing website. These apartments are located in New York City.The target variable, interest level, is defined by the number of inquiries a listing has in the duration that the listing was live on the site</p>
									<h4 class="service-heading">Numeric Predictive Solution:</h4>
									<p>We have chosen R language for Prediction on interest level, so in our analysis we considered,
Test and Train tables which are of JSON format.
Train dataset is useful for our model prediction where we train our model for prediction,
Here model suggests algorithm used for prediction.
Test is the table where we have to find out interest level by individual fields HIGH, MEDIUM, LOW. 
To go further we have to consider fields which are in our Test dataset, by default both Test and Train datasets are having same fields.
From the data fields section of our Train data we will look at mostly on features field which will decide the customers interest so we split the sentence in to individual words for our model convenient and for our visualization to.
We use an algorithm called XGB where it is useful for performance (Running in low time) and another algorithm called Prediction for predicting our model.
After having done with our XGB & Prediction algorithms it gives the predicted data based on listing id with in less time of around 0.55982 seconds.
Based on listing id we are going to have our model generated which is shown below
</p>
									
									<!--<p class="sap-space"><b>SAP ECC</b></p>
									<p class="sap-space"><b>Supply Chain</b></p>
									<p class="sap-space"><b>Dashboards</b></p> 
									<p class="sap-space"><b>CRM </b></p>
									<p><b>SCM</b></p>
									<p>Numeric covers multiple disciplines within these technologies including Financials, Order to Cash, logistic, Supply Chain, Production & Transportation Planning, Demand and Production Plant Planning, Dashboards - including such technologies as Design Studio, Tableau, Lumira, Qlikview, CRM integration with Channel Management, Salesforce Automation, Marketing, Customer Interaction Center, and finally SCM, including Procure to Pay Optimization, Catalogue Management, Self Service Procurement, Operational Management and Centralized Contract Management. We even provide usability technology utilizing cutting edge technologies a Fiore. Our Master Data Management program is utilized at the world's largest steel company, being rolled out to 23 countries in 60 locations. Numeric provides to focus, the technology and the experience to make businesses thrive, regardless of size, scale and scope. Our consistent success working with some of the largest organizations in the world makes us a formidable, more cost effective alternative.</p>
									<div class="spacer-20"></div>	
									<h4 class="service-heading">SAP HANA -</h4>
									<p>Business are becoming more data driven. The demands on IT grows including the need to move operations forward in real time. In-memory technology delivered with the SAP HANA platform helps to significantly reduce IT complexity and simplify IT landscapes across the organization, changing the cost equation through simplification.</p>
									<p>Numeric can help design, develop, integrate and support your enterprise data systems. We can work on full life cycle projects, or provide supplemental resources to existing projects. We are able to provide the scalability, flexibility and experience to ensure execution excellence.3/jquery</p>
									<div class="spacer-20"></div>	
									<h4 class="service-heading">Numeric's BIG - DATA Expertise</h4>
									<p>The amount of data in our world has been exploding, and analyzing large data sets—so-called big data—will become a key basis of competition, underpinning new waves of productivity growth, innovation, and consumer surplus, according to research by MGI and McKinsey's Business Technology Office. Leaders in every sector will have to grapple with the implications of big data, not just a few data-oriented managers. The increasing volume and detail of information captured by enterprises, the rise of multimedia, social media, and the Internet of Things will fuel exponential growth in data for the foreseeable future.</p>
									<p>The use of big data will become a key basis of competition and growth for individual firms. From the standpoint of competitiveness and the potential capture of value, all companies need to take big data seriously. In most industries, established competitors and new entrants alike will leverage data-driven strategies to innovate, compete, and capture value from deep and up-to-real-time information. Indeed, we found early examples of such use of data in every sector we examined.</p>
									<p>Numeric's approach to BIG-DATA is to be as well versed and experienced in the latest tools, products and technologies to ensure that our clients' need are met and that their data is accessible, accelerated and at a reduced cost than what other can offer. Our experienced data scientist utilize multiple flavors of Big-Data tools in order to acheive maximum results, based on the amount and type of data involved. Some of these tools include:</p>
							        <div class="spacer-20"></div>	
									<h4 class="service-heading">HADOOP -</h4>
									<p>Numeric delivers real time insight into data with Hadoop, helping organizations gain the most advantage from their historical, live and emerging unstructured data. More companies embrace Hadoop as the platform to manage their data. However the new generation of Big Data tools and techniques are overwhelming and complex. Numeric helps to mitigate this complexity.</p>
							        <div class="spacer-20"></div>	
									<h4 class="service-heading">SAP HANA -</h4>
									<p>Numeric has invested much into the SAP - HANA - BIG DATA space as more companies are demanding...access to data, speed to data, cost savings, resource training and management and usability for the end user. Numeric designs these systems and provides this integration for organizations of all scales.</p>
							        <p>While there are other technologies available, several in which Numeric has deep knowledge and expertise in, including Cloudera, Hortonworks and Apache, these technologies are in the upper quadrant of technologies that are available today for the enterprise. Ask a Numeric Representatives about our BIG-DATA capabilities.</p>
							-->
							<img src="../img/r1.png" />
							<p>Based on listing id we are going to make merge with Train data set and have our visualization.</p>
							
							<h4 class="service-heading">Visualization:</h4>
							<p>For this we are going to use SAP Lumira tool and create a dashboard, below is the dashboard with data we predicted using R Language.</p>
							<h4 class="service-heading">Dash Board:</h4>
							<img src="../img/r2.png" />
							</div>
                          
                    </div>
                </div>
            </div>
    





<?php
		include '../footer.php';
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
<script type="text/javascript">JotForm.ownerView=true;</script>