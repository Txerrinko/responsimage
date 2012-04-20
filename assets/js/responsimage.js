/*! responsimage v0.1 responsimage.com */
(
	function ()
	{
		'use strict';
		
		$(document).ready(
			function()
			{
				function responsimage(init)
				{
					$(".responsimage").each(
						function()
						{
							var imgStatic, imgLoading, filename, width, height, imgResponsive;

							if(init)
							{
								imgStatic = 'http://f.cl.ly/items/0M3H0q3n1Z1S1y362d09/spacer.gif';
								imgLoading = 'http://f.cl.ly/items/2w2G3N2p0B400Z380J1u/loading.gif';
								$(this).attr('src', imgStatic).css('background', '#fff url(' + imgLoading + ') no-repeat center');
								responsimage();
							}
							else
							{
								filename = $(this).data('responsimage');
								width = $(this).width();
								height = $(this).height();

								if($(this).css('font-family') === 'pixel-ratio-2') 
								{ 
									width *= 2; height *= 2; 
								}

								imgResponsive = $('body').data('responsimage').replace('width', width).replace('height', height).replace('filename', filename);

								if(filename !== 'disabled')
								{
									$(this).attr('src', imgResponsive);
								}
							}
						}
					);
				}

				responsimage(1);

				$(window).resize(
					function()
					{
						responsimage();
					}
				);
			}
		);
	}()
);