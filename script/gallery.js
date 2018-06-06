$(function()
{
	$('.image').on('click', function()
	{
		let imgSrc = $(this).attr('src')
		$('.container').append('<div class="gallery-opened">' + '<img class="zoom-image" src="' + imgSrc + '"/>' +'</div>');
		$('.gallery-opened').append('<img class="close-button" src="content/close.png" onmouseover="this.style.cursor=\'pointer\';"/>');	
		$('.gallery-opened').fadeIn(500);
	})
	
	$('body').on('click', '.close-button', function(e)
	{
		e.stopPropagation();
		$('.gallery-opened').fadeOut(500, function()
		{
		$('.gallery-opened').remove();
		});
	})
});
