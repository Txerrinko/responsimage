<?

extract($_GET);

if(!$width) 
{ 
	$width = 700; 
}

if(!$height) 
{ 
	$height = 300; 
}

?>
<!doctype html>
<html>

	<head>

		<title>responsimage.com</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="responsimage" data-server="http://imageizer.com/image/2/width/height/5/0/uploads/filename" />
		<style type="text/css">@media(-webkit-min-device-pixel-ratio: 2){.responsimage{font-family: 'pixel-ratio-2' }}</style>
	
	</head>

	<body>
		
		<img data-responsimage="burning-man-1335329256.jpg" class="responsimage" width="<?=$width?>" height="<?=$height?>" />
		
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript">google.load('jquery', '1')</script>
		<script src="../assets/js/responsimage.js"></script>

	</body>

</html>