
$(document).ready(function() {
$("#BallsBluff").hover(function(){
 va = $(this).attr("value");
	 var formData = va;
  jQuery.ajax({
	        type:		'POST',
	        url: 		'http://unitedstatescivilwar.org/wp-admin/admin-ajax.php',
	        data: 		{
	            'action': 		'setPageID',
	            'formData': 	va,
	        },
	     success: function(data){			        	
	        	var loadUrl = 'http://unitedstatescivilwar.org/?page_id='+formData; 			        
	       	jQuery("#ajax").load(loadUrl);
	    }	        
  });
	   return false;
	  } ,
	  function(){
		jQuery("#ajax").html(" ");
		 
	
	});
$("#Man").hover(function(){
	 man = $(this).attr("value");
		 var formData = man;
	  jQuery.ajax({
		        type:		'POST',
		        url: 		'http://unitedstatescivilwar.org/wp-admin/admin-ajax.php',
		        data: 		{
		            'action': 		'setPageID',
		            'formData': 	man,
		        },
		     success: function(data){			        	
		        	var loadUrl = 'http://unitedstatescivilwar.org/?page_id='+formData; 			        
		       	jQuery("#ajax").html(loadUrl);
		    }	        
	  });
		   return false;
		  } ,function(){
			  jQuery("#ajax").html(" ");
		
		  });
$("#sharpsburg").hover(function(){
	 sharp = $(this).attr("value");
		 var formData = sharp;
	  jQuery.ajax({
		        type:		'POST',
		        url: 		'http://unitedstatescivilwar.org/wp-admin/admin-ajax.php',
		        data: 		{
		            'action': 		'setPageID',
		            'formData': 	sharp,
		        },
		     success: function(data){			        	
		        	var loadUrl = 'http://unitedstatescivilwar.org/?page_id='+formData; 			        
		       	jQuery("#ajax").load(loadUrl);
		    }	        
	  });
		   return false;
		  } ,function(){
			  jQuery("#ajax").html(" ");
		
		  });

$("#conf").hover(function(){
	 sharp = $(this).attr("value");
		 var formData = sharp;
	  jQuery.ajax({
		        type:		'POST',
		        url: 		'http://unitedstatescivilwar.org/wp-admin/admin-ajax.php',
		        data: 		{
		            'action': 		'setPageID',
		            'formData': 	sharp,
		        },
		     success: function(data){			        	
		        	var loadUrl = 'http://unitedstatescivilwar.org/?page_id='+formData; 			        
		       	jQuery("#ajax").load(loadUrl);
		    }	        
	  });
		   return false;
		  } ,function(){
			  jQuery("#ajax").html(" ");
		
		  });
$("#approach").hover(function(){
	 sharp = $(this).attr("value");
		 var formData = sharp;
	  jQuery.ajax({
		        type:		'POST',
		        url: 		'http://unitedstatescivilwar.org/wp-admin/admin-ajax.php',
		        data: 		{
		            'action': 		'setPageID',
		            'formData': 	sharp,
		        },
		     success: function(data){			        	
		        	var loadUrl = 'http://unitedstatescivilwar.org/?page_id='+formData; 			        
		       	jQuery("#ajax").load(loadUrl);
		    }	        
	  });
		   return false;
		  } ,function(){
			  jQuery("#ajax").html(" ");
		
		  });
$("#fightforhill").hover(function(){
	 sharp = $(this).attr("value");
		 var formData = sharp;
	  jQuery.ajax({
		        type:		'POST',
		        url: 		'http://unitedstatescivilwar.org/wp-admin/admin-ajax.php',
		        data: 		{
		            'action': 		'setPageID',
		            'formData': 	sharp,
		        },
		     success: function(data){			        	
		        	var loadUrl = 'http://unitedstatescivilwar.org/?page_id='+formData; 			        
		       	jQuery("#ajax").load(loadUrl);
		    }	        
	  });
		   return false;
		  } ,function(){
			  jQuery("#ajax").html(" ");
		
		  });
$("#capturingartillery").hover(function(){
	 sharp = $(this).attr("value");
		 var formData = sharp;
	  jQuery.ajax({
		        type:		'POST',
		        url: 		'http://unitedstatescivilwar.org/wp-admin/admin-ajax.php',
		        data: 		{
		            'action': 		'setPageID',
		            'formData': 	sharp,
		        },
		     success: function(data){			        	
		        	var loadUrl = 'http://unitedstatescivilwar.org/?page_id='+formData; 			        
		       	jQuery("#ajax").load(loadUrl);
		    }	        
	  });
		   return false;
		  } ,function(){
			  jQuery("#ajax").html(" ");
		
		  });


});
//Load page into sidebar
function pageView(page){
	

	 jQuery.ajax({
	        type:		'POST',
	        url: 		'http://unitedstatescivilwar.org/wp-admin/admin-ajax.php',
	        data: 		{
	            'action': 		'displayPage',
	            'formData': 	page,
	        },
	        
	    success: function(data){
	  
	        	var loadUrl = 'http://unitedstatescivilwar.org/?page_id='+page; 			        
	        	jQuery("#ajax").load(loadUrl);
	    }	        
});
	  
};

