jQuery( document ).ready(function($) {
	
	// Initialize FitVids (applied only to videos that appear in posts & pages)
	$( '.entry-content' ).fitVids();

	// Maintain Vertical Rhythm on Images (Uses the 30px baseline setup in CSS.  If you change this baselines in the CSS, change it here, too!)
	var hasPostImage = $('.wp-post-image').length;
	if (hasPostImage > 0) {
		$( '.entry-image .wp-post-image' ).baseline(30);
	}

	// Double tap responsive menu (For responsive devices.  Standard rollover in desktop and laptop browsers)
	$( '#nav li:has(ul)' ).doubleTapToGo();

	// prettyPhoto lightbox (It's a lightbox!)
	$(".gallery a").attr("data-rel","prettyPhoto[pp_gal]");
	$("a[data-rel^='prettyPhoto']").prettyPhoto();

	// Add span tag to first world of site title (For styling the first word of the site name)
	$('.site-title a').html(function(_,html) {
    var lines = html.split(/<br\s*[\/]?>/gi);
    for (var i=lines.length; i--;) {
        lines[i] = $.trim(lines[i]).replace(/^(\w+)/, '<span class="highlight">$1</span>')
    }
    return lines.join('<br>');
	});

	// Slider 
	
	$('.flexslider').imagesLoaded( function() {
		$('.flexslider').flexslider({
	  	animation : 'fade',
	    smoothHeight : true,
	  });
	});

	$('.flexslider').fadeIn();

});



