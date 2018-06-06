$(function()
{	
	showContactFormOnClick();
});

function showContactFormOnClick()
{
		$('.contact').on('click', function()
		{	
		
			$('.hide-show').hide(500)
			$(".hide-show").promise().done(function(){
			$('.form-row').show()
			$('html, body').animate({scrollTop: $(".scrollTo").offset().top-100}, 1000)		
			})
			
		});	
	
		$('.return-home').on('click', function()
		{	
			$('.form-row').hide()
			$('.hide-show').show(999)
		});	
}
function showContactFormOnLink()
{
	$(window).on('load', function() {	
	$('.hide-show').hide(999)
	$('.form-row').show()	
	$('html, body').animate({scrollTop: $("#scrollTo").offset().top}, 1000)

});	
}