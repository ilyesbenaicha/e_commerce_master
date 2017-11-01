// JavaScript Document
function redimensionnement(img_elem){ 
 	if (img_elem != null)
	{
		if (!img_elem.complete && !img_elem.forceFlag_complete
			&& !(img_elem.width > 0 && img_elem.height > 0))
		{
			$(img_elem).load(function (evt) {
				if (!this.complete)
				{ this.forceFlag_complete = true; }
				redimensionnement(this);
			});
			return;
		}
		else
		{
			var $image = $('img.superbg');
			if ($image.length == 0)
			{ return; }
			var first_img = $('img.superbg')[0];
			
			var image_width = $(first_img).width();
			var image_height = $(first_img).height();
			
			var over = image_width / image_height;
			var under = image_height / image_width;
			
			var body_width = $(window).width();
			var body_height = $(window).height();
			
			if (body_width / body_height >= over) {
			  $image.css({
				'width': body_width + 'px',
				'height': Math.ceil(under * body_width) + 'px',
				'left': '0px',
				'top': (Math.abs((under * body_width) - body_height) / -2) + 'px'
			  });
			}
			else {
			  $image.css({
				'width': Math.ceil(over * body_height) + 'px',
				'height': body_height + 'px',
				'top': '0px',
				'left': (Math.abs((over * body_height) - body_width) / -2) + 'px'
			  });
			}
			$('#diaporama').fadeTo('normal', 1);
		}
	}
	else
	{
    	var $image = $('img.superbg:eq(0)').each(function(){
			var newImg = new Image();
			newImg.src = this.src;
			redimensionnement(newImg);
		});
	}
}

$(document).ready(function(){
	$('#diaporama').css('opacity', 0);
    // Au chargement initial
    redimensionnement();

    // En cas de redimensionnement de la fenêtre
    $(window).resize(function(){
        redimensionnement();
    });

});