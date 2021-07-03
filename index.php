<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Film posters">
    <link rel="icon" href="./favicon.ico">
    <title>Film posters</title>
    <meta http-equiv="refresh" content="1800">
    <style>
 
        body {   
            overflow: hidden;
            margin: 0px;
            background: black;
        }
 
        #slideshow { 
            padding: 0px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
        }
 
        #slideshow > div { 
            position: absolute; 
            top: 0px; 
            left: 0px; 
            right: 0px; 
            bottom: 0px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
 
        .fillwidth {
            display: inline-block;
            width: 100%;
            height: auto;
            vertical-align: middle;
 
            position: absolute;
            top: 50%;
            transform: translate(0%, -50%);
        }
 
        .fillheight {
            display: block;
            height: 100%; 
            width: auto;
            margin: 0 auto;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
 
	<div id="slideshow">
	    <?php
	    $directory = "smaller_images";
	    $images = glob($directory . "/*.*");
            shuffle($images);
            $images = array_slice($images, 0, 74);
	    foreach($images as $image)
	    { 
	    ?>
	    	<div style="background-image: url('<?= $image; ?>');"></div>
	    <?php
	    }
	    ?>
	</div>
 
	<script type="text/javascript">
	    $("#slideshow > div:gt(0)").hide();
	    setInterval(function() {
	    $('#slideshow > div:first')
	        .fadeOut(10000)
	        .next()
	        .fadeIn(10000)
	        .end()
	        .appendTo('#slideshow');
	    }, 60000);
	</script>
 
</body>
</html>