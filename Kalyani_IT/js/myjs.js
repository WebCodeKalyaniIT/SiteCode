
/*$("#Appdev").click(appdev);
function appdev(){
$("#develop1").addClass("active");
$("#enterprise1").removeClass("active");
}*/
$(document).ready(function(){
    $('#abtadv').click(function(event){
        //remove all pre-existing active classes
        $('#abtovr').removeClass('active');
        $('#abtabt').addClass('active');
		//$("#home").hide();
		$("#home").css("display","none");
		$("#menu1").addClass('tab-pane fade in active');
        //add the active class to the link we clicked
        //$(this).addClass('active');

        //Load the content
        //e.g.
        //load the page that the link was pointing to
        //$('#content').load($(this).find(a).attr('href'));      

        //event.preventDefault();
    });
	$('#abtlead').click(function(event){
        //remove all pre-existing active classes
        $('#abtovr').removeClass('active');
        $('#abtabt').removeClass('active');
        $('#abtls').addClass('active');
		
		$("#home").hide();
		$("#menu1").hide();
		$("#menu2").addClass('tab-pane fade in active');
    });
	$('#abtcase').click(function(event){
        //remove all pre-existing active classes
        $('#abtovr').removeClass('active');
        $('#abtabt').removeClass('active');
        $('#abtls').removeClass('active');
        $('#abtcs').addClass('active');
		
		$("#home").hide();
		$("#menu1").hide();
		$("#menu2").hide();
		$("#menu3").addClass('tab-pane fade in active');
    });
	$('#serdevt').click(function(event){
        //remove all pre-existing active classes
        $('#serents').removeClass('active');
        $('#servapp').addClass('active');
		$("#shome").hide();
		$("#smenu1").addClass('tab-pane fade in active');
    });
	$('#serbdata').click(function(event){
        //remove all pre-existing active classes
        $('#serents').removeClass('active');
        $('#servapp').removeClass('active');
        $('#serbigdata').addClass('active');
		$("#shome").hide();
		$("#smenu1").hide();
		$("#smenu2").addClass('tab-pane fade in active');
    });
	$('#serddb').click(function(event){
        $('#serents').removeClass('active');
        $('#servapp').removeClass('active');
        $('#serbigdata').removeClass('active');
        $('#serdigital').addClass('active');
		$("#shome").hide();
		$("#smenu1").hide();
		$("#smenu2").hide();
		$("#smenu3").addClass('tab-pane fade in active');
    });
	$('#seres').click(function(event){
       $('#serents').removeClass('active');
        $('#servapp').removeClass('active');
        $('#serbigdata').removeClass('active');
        $('#serdigital').removeClass('active');
        $('#serecommerce').addClass('active');
		$("#shome").hide();
		$("#smenu1").hide();
		$("#smenu2").hide();
		$("#smenu3").hide();
		$("#smenu4").addClass('tab-pane fade in active');
    });
	$('#sersa').click(function(event){
        $('#serents').removeClass('active');
        $('#servapp').removeClass('active');
        $('#serbigdata').removeClass('active');
        $('#serdigital').removeClass('active');
        $('#serecommerce').removeClass('active');
        $('#serstaff').addClass('active');
		$("#shome").hide();
		$("#smenu1").hide();
		$("#smenu2").hide();
		$("#smenu3").hide();
		$("#smenu4").hide();
		$("#smenu5").addClass('tab-pane fade in active');
    });
	//industries
	$('#indatms').click(function(event){
        $('#indhealth').removeClass('active');
        $('#indams').addClass('active');
		$("#ihome").hide();
		
		$("#imenu1").addClass('tab-pane fade in active');
    });
	$('#indos').click(function(event){
      
        $('#indhealth').removeClass('active');
        $('#indams').removeClass('active');
        $('#indonlinesp').addClass('active');
		$("#ihome").hide();
		$("#imenu1").hide();
		
		$("#imenu2").addClass('tab-pane fade in active');
    
    });
	$('#inded').click(function(event){
        
        $('#indhealth').removeClass('active');
        $('#indams').removeClass('active');
        $('#indonlinesp').removeClass('active');
        $('#indeducation').addClass('active');
		$("#ihome").hide();
		$("#imenu1").hide();
		$("#imenu2").hide();
		
		$("#imenu3").addClass('tab-pane fade in active');
    });
	$('#indetmt').click(function(event){
       $('#indhealth').removeClass('active');
        $('#indams').removeClass('active');
        $('#indonlinesp').removeClass('active');
        $('#indeducation').removeClass('active');
        $('#indentertertain').addClass('active');
		$("#ihome").hide();
		$("#imenu1").hide();
		$("#imenu2").hide();
		$("#imenu3").hide();
		
		$("#imenu4").addClass('tab-pane fade in active');
    });
	$('#indfnce').click(function(event){
        $('#indhealth').removeClass('active');
        $('#indams').removeClass('active');
        $('#indonlinesp').removeClass('active');
        $('#indeducation').removeClass('active');
        $('#indentertertain').removeClass('active');
        $('#indfinance').addClass('active');
		$("#ihome").hide();
		$("#imenu1").hide();
		$("#imenu2").hide();
		$("#imenu3").hide();
		$("#imenu4").hide();		
		$("#imenu5").addClass('tab-pane fade in active');
    });
	
	
});

