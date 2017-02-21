$(document).ready(function (){
	
	
	$(".generals").click(function(){
    $( ".sidebar-module-inset" ).css( "display", "block" );
		
  id =  $(this).attr("value");
 var formData = id;
	 jQuery.ajax({
	        type:		'POST',
	        url: 		'http://localhost/unitedstatescivilwar/wp-admin/admin-ajax.php',
	        data: 		{
	            'action': 		'displayPage',
	            'formData':id,
	          	        },
	        
	    success: function(data){
	        	var loadUrl = 'http://localhost/unitedstatescivilwar/?page_id=' +formData; 			        
	        	jQuery("#ajax").load(loadUrl);
	    }	        
});
	
});

	
$('.close').click(function (){
	
	$(".blog-nav").css("display", "none");
	
});

 });
 
 
 
 
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    var div = document.getElementById('open_nav_1');
    div.style.display = div.style.display == 'none' ? 'block' : 'none';
    return false;
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
     var div = document.getElementById('open_nav_1');
    div.style.display = div.style.display == 'block' ? 'none' : 'block';
    return true;
}