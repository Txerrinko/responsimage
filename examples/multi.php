<!doctype html>
<html>

	<head>

		<title>responsimage.com</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<style type="text/css">@media(-webkit-min-device-pixel-ratio: 2){.responsimage{font-family: 'pixel-ratio-2' }}</style>
	
	</head>

	<body data-responsimage="http://imageizer.com/image/2/width/height/5/0/uploads/filename">
		
		<h1>Reload to generate random sizes</h1>

		<?

		for($i=0; $i<10; $i++)
		{
			echo '<img ' .
				'data-responsimage="4884749481_edd0b31c6e_o-1334773151.jpg" ' .
				'class="responsimage" ' .
				'width="' . mt_rand(100, 500) . '" ' .
				'height="' . mt_rand(100, 500) . '" ' .
				'style="float:left; margin: 10px" ' .
			'/>';
		}

		?>
		
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript">google.load('jquery', '1')</script>
		<script src="../assets/js/responsimage.js"></script>

	</body>

</html>