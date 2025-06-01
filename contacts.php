<?php
include("connection.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME INTERIOR DESIGN</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>     
</head>
<body id="page5">
	<!--==============================header=================================-->
    <header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="information.html">Information</a></li>
                                <li><a href="designs.html">Designs</a></li>
                                <li><a  href="designers.html">Designers</a></li>
                                <li><a class="active" href="contacts.php">Contacts</a></li>
                                <li><a href="visitors.php">Visitors</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1>
                            <a class="logo" href="index.html">Ho<strong>m</strong>e</a>
                            <span>Interior Design</span>
                        </h1>
                    </div>
                    
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header>
    
<!-- content -->
    <div id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">Contact Form</h3>
                                                    <form id="contact-form" method="post">                    
                                                        <fieldset>
                                                              <label><span class="text-form">Name</span><input placeholder="Name:"   name="p1" type="text" /></label>
                                                              <label><span class="text-form">Email</span><input placeholder="Email:" name="p2" type="text" /></label>   
                                                              <label><span class="text-form">Phone</span><input placeholder="Phone:" name="p3" type="text" /></label>                                    
                                                              <label><span class="text-form">Message</span><input placeholder="Message:" name="p4"type="text"/></label> 
															  
                                                             <div class="buttons">
                                                                  <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                                                  <a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                                                              </div>                             
                                                            </fieldset>                             
                                                        						
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12">
                	<div class="wrapper">
                    	<div class="grid_3">
                        	<h3 class="prev-indent-bot">Our Address</h3>
                            <dl>
                                <dt class="indent-bot">Home Interior Design<br>R A Collage, Washim.</dt>
                                <dd><span>phone no 1:</span> +917972995118</dd>
                                <dd><span>phone no 2:</span> +917038681456</dd>
                                <dd><strong>E-mail:</strong> <a href="#">rohitgiram12@gmail.com</a></dd>
                            </dl>
                        </div>
                        <div class="grid_9">
                        	<h3 class="prev-indent-bot">Conclusion</h3>
                            Thank you for using and getting help from this prototype site hope you found this site useful and helpful and hope you enjoyed it too much.....
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<!--==============================footer=================================-->
   <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<div class="grid_4">
                    	<div>
                        <p>Designed by: RAC BCA students </p>
                        </div>
                       
                    </div>
                    <div class="grid_4">
                    	<span class="phone-numb"><span>+91</span> 7972995118 </span>
                    </div>
                    <div class="grid_4">
                    	<ul class="list-services">
                        	<li><a href="#"></a></li>
                            <li><a class="item-2" href="#"></a></li>
                            <li><a class="item-3" href="#"></a></li>
                            <li><a class="item-4" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
			$(window).load(function() {
			// We only want these styles applied when javascript is enabled
			$('div.navigation').css({'width' : '320px', 'float' : 'right'});
			$('div.content').css('display', 'block');
	
			// Initially set opacity on thumbs and add
			// additional styling for hover effect on thumbs
			var onMouseOutOpacity = 0.5;
			$('#thumbs ul.thumbs li span').opacityrollover({
				mouseOutOpacity:   onMouseOutOpacity,
				mouseOverOpacity:  0.0,
				fadeSpeed:         'fast',
				exemptionSelector: '.selected'
			});
			
			// Initialize Advanced Galleriffic Gallery
			var gallery = $('#thumbs').galleriffic({
				delay:                     7000,
				numThumbs:                 12,
				preloadAhead:              6,
				enableTopPager:            false,
				enableBottomPager:         false,
				imageContainerSel:         '#slideshow',
				controlsContainerSel:      '',
				captionContainerSel:       '',
				loadingContainerSel:       '',
				renderSSControls:          true,
				renderNavControls:         true,
				playLinkText:              'Play Slideshow',
				pauseLinkText:             'Pause Slideshow',
				prevLinkText:              'Prev',
				nextLinkText:              'Next',
				nextPageLinkText:          'Next',
				prevPageLinkText:          'Prev',
				enableHistory:             true,
				autoStart:                 7000,
				syncTransitions:           true,
				defaultTransitionDuration: 900,
				onSlideChange:             function(prevIndex, nextIndex) {
					// 'this' refers to the gallery, which is an extension of $('#thumbs')
					this.find('ul.thumbs li span')
						.css({opacity:0.5})
				},
				onPageTransitionOut:       function(callback) {
					this.find('ul.thumbs li span').css({display:'block'});
				},
				onPageTransitionIn:        function() {
					this.find('ul.thumbs li span').css({display:'none'});
				}
			});
		});
	</script>
</body>
</html>

<?php


$name=$_GET['p1'];
$email=$_GET['p2'];
$phone=$_GET['p3'];
$message=$_GET['p4'];
if ($name && $email && $phone && $message) {
    $query="INSERT INTO CLIENT VALUES ('$name','$email','$phone','$message')";
    $data= mysqli_query($conn,$query);
    if ($data) 
    {
        echo"data inserted into database";
        
    }
    else
    {
        echo"failed into insert into database";
    }
}

?>
