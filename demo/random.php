<!DOCTYPE html>
<!-- Camera is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) --> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <title>Camera | a free jQuery slideshow by Pixedelic</title> 
    <meta name="description" content="Camera a free jQuery slideshow with many effects, transitions, adaptive layout, easy to customize, using canvas and mobile ready"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'> 
    <style>
		body {
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: none;
		}
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 1000px;
			width: 90%;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
    <script type='text/javascript' src='../scripts/jquery.min.js'></script>
    <script type='text/javascript' src='../scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../scripts/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_random').camera({
				thumbnails: true
			});

		});
	</script>
 
</head>
<body>
	<div id="back_to_camera">
    	<a href="http://www.pixedelic.com/plugins/camera/">&larr; Back to the Camera project</a>
    </div><!-- #back_to_camera -->
    
	<div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_random">
<?php
$slides = array(
            '<div data-thumb="../images/slides/thumbs/bridge.jpg" data-src="../images/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>',
            '<div data-thumb="../images/slides/thumbs/leaf.jpg" data-src="../images/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>',
            '<div data-thumb="../images/slides/thumbs/road.jpg" data-src="../images/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It\'s completely free</em> (even if a donation is appreciated)
                </div>
            </div>',
            '<div data-thumb="../images/slides/thumbs/sea.jpg" data-src="../images/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
            </div>',
            '<div data-thumb="../images/slides/thumbs/shelter.jpg" data-src="../images/slides/shelter.jpg">
                <div class="camera_caption fadeFromBottom">
                    It supports captions, HTML elements and videos and <em>it\'s validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                </div>
            </div>',
            '<div data-thumb="../images/slides/thumbs/tree.jpg" data-src="../images/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>'
);
shuffle($slides);
foreach ($slides as $slides) {
    echo "$slides\n";
}
?>
        </div><!-- #camera_random -->

    </div><!-- .fluid_container -->
    
    <div style="clear:both; display:block; height:100px"></div>
</body> 
</html>