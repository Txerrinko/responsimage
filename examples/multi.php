<!doctype html>
<html>

	<head>

		<title>responsimage.com</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="responsimage" data-server="http://imageizer.com/image/2/width/height/anchor/0/uploads/filename" />
		<style type="text/css">@media(-webkit-min-device-pixel-ratio: 2){[data-responsimage]{font-family: 'pixel-ratio-2' }}</style>
	
	</head>

	<body>
		
		<h1>Reload to generate random sizes</h1>

		<?

		for($i=0; $i<10; $i++)
		{
			echo '<img ' .
				'data-responsimage="burning-man-1335329256.jpg" ' .
				'class="responsimage" ' .
				'width="' . mt_rand(100, 500) . '" ' .
				'height="' . mt_rand(100, 500) . '" ' .
				'style="float:left; margin: 10px" ' .
			'/>' . "\n\t\t";
		}

		?>
		
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript">google.load('jquery', '1')</script>
		<script src="https://raw.github.com/kirkstrobeck/responsimage/master/assets/js/responsimage.js"></script>

	</body>

</html>