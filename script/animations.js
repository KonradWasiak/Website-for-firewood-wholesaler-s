//LOADER

$(window).on('load', function() {	
	$( ".form-row" ).hide();
    $(".loader").fadeOut(1000);
});

//SCROLL UP
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});

$(function()
{	
	// ZANIKANIE I POJAWIANIE SIE ELEMENTOW
	
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) 
	{
		$('.animation-fade-in').addClass('fade-in-on-load');
	}
	
	$('.fade-in-on-load').each(function()
	{
        $(this).animate({'opacity':'1'},750)
	})
	
    $(window).scroll( function(){
        $('.animation-fade-in').each( function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object - 400 ){
                $(this).animate({'opacity':'1'},500);
            }
        }); 
    });

	// KONTAKT
		
});