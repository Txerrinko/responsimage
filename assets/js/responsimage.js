/* responsimage.com v0.2.2 */
(function ($, window, Date) {

	'use strict';

	$(function() {

		var rPrefs = $('meta[name="responsimage"]'),
			rServer = rPrefs.data('server'),
			rStatic = rPrefs.data('static') || 'http://f.cl.ly/items/0M3H0q3n1Z1S1y362d09/spacer.gif',
			rLoading = rPrefs.data('loading') || 'http://f.cl.ly/items/2w2G3N2p0B400Z380J1u/loading.gif',
			rLimit = rPrefs.data('limit') || 100,
			rTimestamp = new Date(),
			rTags = $('[data-responsimage]');

		function responsimage(rInit) {
			rTags.each(function() {
				var rThis = $(this),
					filename = rThis.data('responsimage'),
					rWidth = rThis.width(),
					rHeight = rThis.height(),
					rImage;

				if(rInit) {
					rThis.attr('src', rStatic).css('background', '#fff url(' + rLoading + ') no-repeat center');
				}

				if(rThis.css('font-family') === 'pixel-ratio-2') {
					rWidth *= 2;
					rHeight *= 2;
				}

				rImage = rServer.replace('width', rWidth).replace('height', rHeight).replace('filename', filename);

				if(filename !== 'disabled') {
					rThis.attr('src', rImage);
				}
			});
		}

		responsimage(1);

		$(window).resize(function () {
			var rNow = new Date();

			if (rNow - rTimestamp >= rLimit) {
				responsimage(false);
			}
		});

		window.onorientationchange = function() {      
			setTimeout(responsimage, 0); 
		};
	});
}(jQuery, window, Date));